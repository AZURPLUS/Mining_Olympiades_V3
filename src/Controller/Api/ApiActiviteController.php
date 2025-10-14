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
                'titre' => "Journée <span>scientifique</span>",
                'resume' => '
                <ul>
                    <li><u>Thème</u>: <strong>la chaine de valeur de l’activité minière et opportunités d’insertion professionnelles pour les jeunes (à confirmer)</strong></li>
                    <li><u>Date</u>: 12 décembre 2025 de 14h00 - 17h00</li>
                    <li><u>Lieu</u>: INPHB SUD</li>
                </ul>
                ',
                'icon' => 'icon-scientific-o.png',
                'media' => 'journeescientifique.jpg',
                'date' => "vendredi 12 décembre 2025",
                'lieu' => 'INPHB SUD',
                'heure' => "14h00 - 17h00"
            ],
            [
                'titre' => "Journée <span>sportive</span>",
                'resume' => '
                <ul>
                    <li><u>Discipline</u>: 23 disciplines</li>
                    <li><u>Date</u>: 13 décembre 2025 de 07h00 - 17h30</li>
                    <li><u>Lieu</u>: INPHB CENTRE & SUD</li>
                </ul>
                ',
                'icon' => 'icon-sport.png',
                'media' => 'sport.png',
                'date' => "samedi 13 décembre 2025",
                'lieu' => 'INPHB CENTRE & SUD',
                'heure' => "7h00 - 17h30"
            ],
            [
                'titre' => "Soirée de <span>récompense</span>",
                'resume' => '
                <ul>
                    <li><u>Dress code</u>:<strong>Vivons la diversité culturelle</strong></li>
                    <li><u>Date</u>: 13 décembre 2025 de 19h30 - 23h00</li>
                    <li><u>Lieu</u>: HÔTEL HP RESORT </li>
                </ul>
                ',
                'icon' => 'icon-gala.png',
                'media' => 'dine_gala.png',
                'date' => "samedi 13 décembre 2025",
                'lieu' => 'HÔTEL HP RESORT ',
                'heure' => "19h30 - 23h00"
            ]
        ];
        return $this->json($activites);
    }

    #[Route('/accueil', name: 'api_activite_accueil', methods: ['GET'])]
    public function accueil(): JsonResponse
    {
        $activites = [
            [
                'titre' => "Journée <span>scientifique</span>",
                'resume' => "En prélude au tournoi, cinq cents (500) jeunes gens, principalement issus de l'INPHB et en filières en lien  avec les métiers des mines, sont invités à rencontrer,     échanger et se rapprocher des professionnels miniers. 
Le thème retenu de cette année est: <strong>« l’importance des politiques de santé et sécurité dans les mines ».</strong>",
                'icon' => 'icon-scientific-o.png',
                'media' => 'scientifique.png',
                'date' => "vendredi 12 décembre 2025",
                'lieu' => 'INPHB CENTRE',
                'heure' => "14h00 - 17h00"
            ],
            [
                'titre' => "Journée <span>sportive</span>",
                'resume' => "Moment clé des Mining Olympiades, la journée sportive mettra en confrontation des équipes hommes ou femmes dans une trentaine de disciplines.",
                'icon' => 'icon-sport.png',
                'media' => 'sports.png',
                'date' => "samedi 13 décembre 2025",
                'lieu' => 'INPHB CENTRE & SUD',
                'heure' => "7h00 - 17h30"
            ],
            [
                'titre' => "Soirée de <span>recompense</span>",
                'resume' => "Pour cette 8ème édition et comme à l’accoutumée, le GPMCI organisera une soirée gala pour récompenser les vainqueurs et célébrer la fin d’année.  <br/>
A cette occasion, il seta demandé aux participants d'arborer une tenue traditionnelle, célébrant la région/zone d'intervention de la compagnie d'origine.
Un hommage sera rendu à des personnalités du secteur minier qui l’ont impacté",
                'icon' => 'icon-gala.png',
                'media' => 'gala.png',
                'date' => "samedi 13 décembre 2025",
                'lieu' => 'HÔTEL PRESIDENT',
                'heure' => "19h30 - 23h00"
            ]
        ];
        return $this->json($activites);
    }
}
