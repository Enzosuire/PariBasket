<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    private $entityManager;
    private $userRepository;
    private $passwordHasher;

    protected function setUp(): void
    {
        // Démarrer le kernel Symfony
        self::bootKernel();

        // Récupérer le container de services
        $container = static::getContainer();

        // Obtenir l'EntityManager réel
        $this->entityManager = $container->get('doctrine')->getManager();
        
        // Obtenir le UserRepository réel
        $this->userRepository = $this->entityManager->getRepository(User::class);
        
        // Obtenir le service de hashage de mot de passe réel
        $this->passwordHasher = $container->get('security.password_hasher');
    }

    public function testEmailAlreadyTaken()
    {
        // Créer un utilisateur de test
        $existingUser = new User();
        $existingUser->setEmail('test@example.com');
        $existingUser->setPassword($this->passwordHasher->hashPassword(
            $existingUser,
            'password123'
        ));

        // Persister l'utilisateur
        $this->entityManager->persist($existingUser);
        $this->entityManager->flush();

        // Vérifier que l'utilisateur existe
        $foundUser = $this->userRepository->findOneBy(['email' => 'test@example.com']);
        $this->assertNotNull($foundUser, 'L\'utilisateur devrait exister en base de données');
        
        // Nettoyer la base de données
        $this->entityManager->remove($existingUser);
        $this->entityManager->flush();
    }

    public function testSuccessfulRegistration()
    {
        $newUser = new User();
        $newUser->setEmail('newuser@example.com');
        $plainPassword = 'securepassword123';

        // Hasher le mot de passe
        $hashedPassword = $this->passwordHasher->hashPassword($newUser, $plainPassword);
        $newUser->setPassword($hashedPassword);

        // Persister le nouvel utilisateur
        $this->entityManager->persist($newUser);
        $this->entityManager->flush();

        // Vérifier que l'utilisateur a été créé
        $foundUser = $this->userRepository->findOneBy(['email' => 'newuser@example.com']);
        $this->assertNotNull($foundUser);
        $this->assertNotEquals($plainPassword, $foundUser->getPassword());

        // Nettoyer la base de données
        $this->entityManager->remove($newUser);
        $this->entityManager->flush();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // Fermer l'EntityManager
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
