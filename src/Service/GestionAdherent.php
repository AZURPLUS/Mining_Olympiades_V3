<?php

namespace App\Service;

use App\Entity\Adhesion;
use App\Entity\Compagnie;
use Doctrine\ORM\EntityManagerInterface;

class GestionAdherent
{
    public function __construct(
        private EntityManagerInterface $entityManager,
    )
    {
    }

    public function validation(Adhesion $adhesion): void
    {
        $compagnie = new Compagnie();
        $compagnie->setTitre($adhesion->getEntreprise());
        $compagnie->setRepresentant($adhesion->getCivilite().' '.$adhesion->getNom().' '.$adhesion->getPrenoms());
        $compagnie->setDg($adhesion->getCivilite().' '.$adhesion->getNom().' '.$adhesion->getPrenoms());
        $compagnie->setContact($adhesion->getTelephone());
        $compagnie->setSlug($adhesion->getSlug());
        $compagnie->setEmail($adhesion->getEmail());

        $this->entityManager->persist($compagnie);

        $adhesion->setStatut(true);

        $this->entityManager->flush();
    }
}