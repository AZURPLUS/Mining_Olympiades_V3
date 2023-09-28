<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/membre')]
class FrontendMembreController extends AbstractController
{
    #[Route('/', name: 'app_frontend_membre_index')]
    public function index(): Response
    {
        return $this->render('frontend/choix_discipline.html.twig');
    }

    #[Route('/participation', name: 'app_frontend_membre_participant')]
    public function participant(): Response
    {
        return $this->render('frontend/membre_participation.html.twig');
    }
}