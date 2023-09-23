<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/activite')]
class ApiActiviteController extends AbstractController
{
    #[Route('/', name: 'api_activite_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $activites = [
            [
                'titre' => "Journée scientifique",
                'resume' => "En prélude au tournoi, cinq cent (500) jeunes gens, principalement issus de l’ (INPHB), une après-midi avec les étudiants en mine et géologie, est organisée viendront échanger et rencontrer les professionnels miniers. Le thème de cette année est : « synergie des compétences pour un secteur minier performant et durable ».",
                'media' => 'icon-scientific-o.png'
            ],
            [
                'titre' => "Journée sportive",
                'resume' => "Moment clé des Mining Olympiades, la journée sportive de cette édition mettra en confrontation des équipes hommes et femmes dans une vingtaine de disciplines mixtes. ",
                'media' => 'icon-sport.png'
            ],
            [
                'titre' => "Soirée de récompense",
                'resume' => "Pour cette 7ème édition et comme à l’accoutumée, le GPMCI organisera une soirée dinatoire pour récompenser les vainqueurs et célébrer la fin d’année. Cette soirée primera les meilleurs compétiteurs du tournoi et remerciera les différents partenaires à l’organisation.",
                'media' => 'icon-gala.png'
            ]
        ];
        return $this->json($activites);
    }
}
