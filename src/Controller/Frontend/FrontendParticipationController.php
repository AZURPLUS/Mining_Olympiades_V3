<?php

namespace App\Controller\Frontend;

use App\Entity\Participant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/participation')]
class FrontendParticipationController extends AbstractController
{
    #[Route('/', name: 'app_frontend_participation_add', methods: ['GET'])]
    public function add()
    {
        return $this->render('frontend/participation.html.twig');
    }

    #[Route('/{slug}', name: 'app_frontend_participation_show', methods: ['GET'])]
    public function show(Participant $participant)
    {
        return $this->render('frontend/participant.html.twig',[
            'participant' => $participant
        ]);
    }
}