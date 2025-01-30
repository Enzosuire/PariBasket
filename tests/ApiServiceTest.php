<?php

use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use App\Service\SportRadarApiService;

class ApiServiceTest extends TestCase  
{
    public function testApiConnection()
    {
        // Créer un mock de l'interface HttpClientInterface  
        /** @var HttpClientInterface|\PHPUnit\Framework\MockObject\MockObject $mockHttpClient */
        $mockHttpClient = $this->createMock(HttpClientInterface::class);
        
        // Créer un mock de ResponseInterface pour simuler la réponse de l'API  
        /** @var ResponseInterface|\PHPUnit\Framework\MockObject\MockObject $mockResponse */
        $mockResponse = $this->createMock(ResponseInterface::class);
        
        // Définir le comportement des méthodes getStatusCode et getContent  
        $mockResponse->method('getStatusCode')->willReturn(200);
        $mockResponse->method('getContent')->willReturn('{"matches": []}');  // Exemple de contenu JSON sous forme de chaîne
        
        // Configurer le mock pour retourner la réponse simulée lorsqu'on appelle request  
        $mockHttpClient->method('request')
            ->with('GET', 'https://api.example.com//nbdl/trial/v8/en/games/2024/REG/schedule.json')  // Définir l'URL simulée  
            ->willReturn($mockResponse);  // Retourner le mock de la réponse
        
        // API Key et URL de base  
        $mockApiKey = 'dummy-api-key';
        $mockBaseUrl = 'https://api.example.com/';
        
        // Créer une instance du service SportRadarApiService en injectant les mocks  
        $apiService = new SportRadarApiService($mockHttpClient, $mockApiKey, $mockBaseUrl);

        // Appeler la méthode du service pour récupérer les matchs  
        $response = $apiService->getMatchSchedule();

        // Vérifier que le statut est bien 200  
        $this->assertEquals(200, $response['status_code']);
        
        // Vérifier que le contenu de la réponse est un tableau décodé à partir du JSON  
        $this->assertIsArray($response['data']);
        $this->assertArrayHasKey('matches', $response['data']);
        
        // Vérifier que le tableau 'matches' est vide  
        $this->assertEmpty($response['data']['matches']);
    }
}