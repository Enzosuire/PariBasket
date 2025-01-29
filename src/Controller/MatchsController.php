<?php

namespace App\Controller;

use App\Entity\Matchs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchsController extends AbstractController
{
    #[Route('/matchs', name: 'app_matchs')]
    public function index(APIController $apiController,  EntityManagerInterface $entityManager): Response
    {
        // Appel de l'API interne
        $jsonResponse = $apiController->getMatchSchedule();
        // Décodage de la réponse JSON en tableau PHP
        $matchsAVenir = json_decode($jsonResponse->getContent(), true);

        $jsonResultResponse = $apiController->getResult();
        // Décodage de la réponse JSON en tableau PHP
        $matchsPasse = json_decode($jsonResultResponse->getContent(), true);
        dump($matchsPasse);

        // On prend les 10 premiers matchs terminés
        $matchsAEnregistrer = array_slice($matchsPasse, 0, 10);

        foreach ($matchsAEnregistrer as $match) {
            // Vérifier si le match existe déjà en base
            $existingMatch = $entityManager->getRepository(Matchs::class)->findOneBy(['Game_id' => $match['gameId']]);
            if ($existingMatch) {
                continue; // Si déjà en base, on passe au suivant
            }else {
                // Créer un nouvel objet Match
                $matchResult = new Matchs();
                $matchResult->setGameId($match['gameId']);
                $matchResult->setHomeTeamName($match['home_team']);
                $matchResult->setAwayTeamName($match['away_team']);
                $matchResult->setHomePoints($match['home_score']);
                $matchResult->setAwayPoints($match['away_score']);
                $matchResult->setScheduledTime( $match['date']);
                // Sauvegarder en base
                $entityManager->persist($matchResult);
            }
        }

        $entityManager->flush(); // Exécute l'insertion en base



        return $this->render('matchs/index.html.twig', [
            'matchs' => $matchsAVenir,
            'matchs_passe' => $matchsPasse,

        ]);
    }

    #[Route('/matchs/{id}', name: 'app_matchs_details')]
    public function details(APIController $apiController, string $id): Response
    {
        // Appel de l'API interne
        $jsonResponse = $apiController->getMatchDetails($id);

        // Décodage de la réponse JSON en tableau PHP
        $detailsMatch= json_decode($jsonResponse->getContent(), true);

        if (!$detailsMatch) {
            throw $this->createNotFoundException("Détails du match introuvables.");
        }
        $match = $detailsMatch[0];
        return $this->render('matchs/detail.html.twig', [
            'match' => $match,
        ]);
    }

}
