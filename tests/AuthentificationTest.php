<?php

use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AuthenticationTest extends WebTestCase
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;
    
    protected static function getKernelClass(): string
    {
        return \App\Kernel::class;
    }

    protected function setUp(): void
    {
        self::bootKernel();
        $this->entityManager = self::getContainer()->get(EntityManagerInterface::class);
        $this->passwordHasher = self::getContainer()->get(UserPasswordHasherInterface::class);
    }

    public function testAuthenticationRequiredForBetting()
    {
        $client = static::createClient();

        // Tentative d'accès à la page de profil sans être authentifié
        $client->request('GET', '/user');

        // Vérifier que l'utilisateur est redirigé vers la page de connexion
        $this->assertResponseRedirects('/login');
    }

    public function testAccessAfterLogin()
    {
        // Création d'un utilisateur
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->passwordHasher->hashPassword($user, 'password123')); // 🔹 Correction ici

        // Sauvegarde en base
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
    
        // Récupérer un utilisateur existant depuis la base de données
        $testUser = $userRepository->findOneBy(['email' => 'test@example.com']); // 🔹 Correction ici
    
        // Simuler la connexion de l'utilisateur
        $client->loginUser($testUser);
    
        // Accéder à la page utilisateur après authentification
        $client->request('GET', '/user');
    
        // Vérifier que la page utilisateur est accessible
        $this->assertResponseIsSuccessful();
    }
}
