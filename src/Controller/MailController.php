<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailController extends AbstractController
{
    #[Route('/send-email')]
    public function sendEmail(MailerInterface $mailer, Request $request): Response
    {
        // Créer un nouvel email
        $email = (new Email())
            ->from('info@miningolympiades.org') // L'adresse email de l'expéditeur
            ->to(addresses: $request->request->get('email') ?? 'assidikouattara@gmail.com') // L'adresse email du destinataire
            ->subject('Test Email from Symfony') // Sujet de l'email
            ->text('This is a test email sent from Symfony.') // Contenu en texte brut
            ->html('<p>This is a <b>test email</b> sent from Symfony.</p>'); // Contenu en HTML

        // Envoyer l'email

        try {
            $mailer->send($email);
        } catch (Exception $e) {
            $this->get('logger')->error('Email sending failed: ' . $e->getMessage());
            return new Response('Failed to send email: ' . $e->getMessage());
        }


        // dd($email);
        // Retourner une réponse HTTP
        return new Response('Email sent successfully!');
    }
}
