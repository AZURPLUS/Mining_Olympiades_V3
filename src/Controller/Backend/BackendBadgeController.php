<?php

namespace App\Controller\Backend;

use App\Entity\Compagnie;
use App\Repository\JoueurRepository;
use App\Repository\MembreRepository;
use App\Service\AllRepositories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/print')]
class BackendBadgeController extends AbstractController
{
    public function __construct(
        private JoueurRepository $joueurRepository,
        private AllRepositories $allRepositories,
    )
    {
    }

    #[Route('/', name: 'app_backend_badge_liste')]
    public function liste()
    {
        $joueurs = $this->joueurRepository->findAll();
        $participants=[];
        foreach ($joueurs as $joueur){
            $participants[] = $this->allRepositories->getProfileJoueur($joueur->getId());
        }

//        dd($participants);
        return $this->render('backend/badges.html.twig',[
            'joueurs' =>$participants
        ]);
    }

    #[Route('/{id}', name: 'app_backend_badge_compagnie', methods: ['GET'])]
    public function badge(Compagnie $compagnie)
    {
        $joueurs = $this->joueurRepository->getJoueurByCompagnie($compagnie);
        $participants=[];
        foreach ($joueurs as $joueur){
            $participants[] = $this->allRepositories->getProfileJoueur($joueur->getId());
        }

//        dd($participants);
        return $this->render('backend/badges.html.twig',[
            'joueurs' =>$participants
        ]);
    }

    #[Route('/equipes/liste', name: 'app_backend_badge_equipe')]
    public function equipe()
    {
        return $this->render('backend/badge_equipe.html.twig',[
            'compagnies' => $this->allRepositories->getAllCompagnieWithParticipant(),
        ]);
    }
}