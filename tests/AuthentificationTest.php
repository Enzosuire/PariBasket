<?php

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthenticationTest extends WebTestCase
{
    protected static function getKernelClass(): string
    {
        return \App\Kernel::class;
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
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
    
        // Récupérer un utilisateur existant depuis la base de données
        $testUser = $userRepository->findOneByEmail('test@example.com');
    
        // Simuler la connexion de l'utilisateur
        $client->loginUser($testUser);
    
        // Accéder à la page utilisateur après authentification
        $client->request('GET', '/user');
    
        // Vérifier que la page utilisateur est accessible
        $this->assertResponseIsSuccessful();
    }
    
}

