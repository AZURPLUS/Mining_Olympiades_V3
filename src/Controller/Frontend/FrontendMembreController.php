<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/membre')]
class FrontendMembreController extends AbstractController
{
    #[Route('/', name: 'app_frontend_membre_index')]
    public function index()
    {
        return $this->render('frontend/choix_discipline.html.twig');
    }
}