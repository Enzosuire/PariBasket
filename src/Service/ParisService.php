<?php

// src/Service/BetService.php

namespace App\Service;

use App\Entity\Paris;
use App\Entity\Matchs;
use Doctrine\ORM\EntityManagerInterface;

class ParisService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Met à jour les paris en fonction des résultats du match
     * @param Matchs $match
     */
    public function updateParis(Matchs $match)
    {
        // Récupérer les paris associés à ce match
        $parisRepository = $this->entityManager->getRepository(Paris::class);
        $paris = $parisRepository->findBy(['match' => $match]);

        // Vérifier les résultats pour chaque pari
        foreach ($paris as $pari) {
            // Vérifier si le pari est sur la bonne équipe
            $user = $pari->getUser();
            $mise = $pari->getMise();
            $gagnant = null;

            // Comparer les scores et déterminer si le pari est gagné ou perdu
            if ($pari->getEquipe() === 'home' && $match->getHomePoints() > $match->getAwayPoints()) {
                $gagnant = 'home';
            } elseif ($pari->getEquipe() === 'away' && $match->getAwayPoints() > $match->getHomePoints()) {
                $gagnant = 'away';
            }

            // Si l'équipe sur laquelle l'utilisateur a parié a gagné
            if ($gagnant) {
                $pari->setStatut('terminé');
                $pari->setGains($mise * 2);  // Le gain est la mise * 2
                $user->setSolde($user->getSolde() + ($mise * 2));  // Mise à jour du solde de l'utilisateur
            } else {
                // Si l'utilisateur a perdu le pari
                $pari->setStatut('terminé');
                $pari->setPerte($mise);  // La perte est égale à la mise
            }

            // Persister les entités modifiées
            $this->entityManager->persist($pari);
            $this->entityManager->persist($user);  // Ne pas oublier de persister l'utilisateur
        }

        // Flush à la fin pour éviter les appels multiples à la base
        $this->entityManager->flush();
    }
}
