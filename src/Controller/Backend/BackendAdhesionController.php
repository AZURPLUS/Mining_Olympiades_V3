<?php

namespace App\Controller\Backend;

use App\Entity\Adhesion;
use App\Form\AdhesionType;
use App\Repository\AdhesionRepository;
use App\Service\GestionAdherent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backend/adhesion')]
class BackendAdhesionController extends AbstractController
{
    public function __construct(
        private GestionAdherent $gestionAdherent,
        private MailerInterface $mailer
    )
    {
    }

    #[Route('/', name: 'app_backend_adhesion_index', methods: ['GET'])]
    public function index(AdhesionRepository $adhesionRepository): Response
    {
        return $this->render('backend_adhesion/index.html.twig', [
            'adhesions' => $adhesionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_backend_adhesion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $adhesion = new Adhesion();
        $form = $this->createForm(AdhesionType::class, $adhesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($adhesion);
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_adhesion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backend_adhesion/new.html.twig', [
            'adhesion' => $adhesion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_backend_adhesion_show', methods: ['GET'])]
    public function show(Adhesion $adhesion): Response
    {
        return $this->render('backend_adhesion/show.html.twig', [
            'adhesion' => $adhesion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_backend_adhesion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Adhesion $adhesion, EntityManagerInterface $entityManager): Response
    {
//        dd($request->get('_csrf_token'));
//        $form = $this->createForm(AdhesionType::class, $adhesion);
//        $form->handleRequest($request);

        if ($this->isCsrfTokenValid('validation'.$adhesion->getId(), $request->get('_csrf_token'))) {

            $this->gestionAdherent->validation($adhesion);

            $email = (new Email())
                ->from('noreply@miningolympiades.org')
                ->to('delrodieamoikon@gmail.com')
                ->subject("Validation de votre demande d'adhesion")
                ->text('Votre demande a été validée avec succès!')
                ->html('<p>See Twig integration for better HTML integration!</p>');

            try {
                $this->mailer->send($email);
                // Si nous sommes ici, l'envoi a réussi
                dump( 'L\'e-mail a été envoyé avec succès 1!');
            } catch (TransportExceptionInterface $e) {
                // Une exception est lancée si quelque chose ne va pas
                echo 'Erreur lors de l\'envoi de l\'e-mail: '.$e->getMessage();
            }



            sweetalert()->addSuccess("La demande de la compagnie {$adhesion->getEntreprise()} a été validée avec succès!");

            return $this->redirectToRoute('app_backend_adhesion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backend_adhesion/edit.html.twig', [
            'adhesion' => $adhesion,
        ]);
    }

    #[Route('/{id}', name: 'app_backend_adhesion_delete', methods: ['POST'])]
    public function delete(Request $request, Adhesion $adhesion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adhesion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($adhesion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_backend_adhesion_index', [], Response::HTTP_SEE_OTHER);
    }
}
