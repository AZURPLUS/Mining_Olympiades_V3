<?php

namespace App\Service;

use App\Entity\Adhesion;
use App\Entity\Compagnie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class GestionAdherent
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private MailerInterface $mailer
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

        $this->notification($adhesion);
    }

    public function notification($adhesion): void
    {
        //dd($adhesion);
        $email = (new Email())
            ->from('noreply@miningolympiades.org')
            ->to('delrodieamoikon@gmail.com')
            ->subject("Validation de votre demande d'adhésion")
            ->text('Votre demande a été validée avec succès!')
            ->html('<p>See Twig integration for better HTML integration!</p>')
        ;

        try {
//            dd($email);
            $this->mailer->send($email);
            // Si nous sommes ici, l'envoi a réussi
            //dd( 'L\'e-mail a été envoyé avec succès!');
        } catch (TransportExceptionInterface $e) {
            // Une exception est lancée si quelque chose ne va pas
            echo 'Erreur lors de l\'envoi de l\'e-mail: '.$e->getMessage();
        }
    }
}