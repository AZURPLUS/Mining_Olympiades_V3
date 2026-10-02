<?php

namespace App\Controller\Backend;

use App\Entity\Joueur;
use App\Entity\Notification;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backend/joueur')]
class BackendJoueurController extends AbstractController
{
    public function __construct(
        private JoueurRepository $joueurRepository,
    )
    {
    }

    #[Route('/', name: 'app_backend_joueur_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('backend_joueur/index.html.twig', [
            'joueurs' => $this->joueurRepository->getAll(),
        ]);
    }

    #[Route('/{id}/valider', name: 'app_backend_joueur_valider', methods: ['POST'])]
    public function valider(Request $request, Joueur $joueur, EntityManagerInterface $em): JsonResponse
    {
        if (!$this->isCsrfTokenValid('valider' . $joueur->getId(), $request->request->get('_token'))) {
            return $this->json(['error' => 'Token invalide'], Response::HTTP_FORBIDDEN);
        }

        $joueur->setStatus('validated');
        $joueur->setRejectMessage(null);
        $em->flush();

        sweetalert()->addSuccess("Participant {$joueur->getNom()} {$joueur->getPrenoms()} validé avec succès!");

        return $this->json(['success' => true, 'message' => 'Participant validé']);
    }

    #[Route('/{id}/rejeter', name: 'app_backend_joueur_rejeter', methods: ['POST'])]
    public function rejeter(Request $request, Joueur $joueur, EntityManagerInterface $em): JsonResponse
    {
        if (!$this->isCsrfTokenValid('rejeter' . $joueur->getId(), $request->request->get('_token'))) {
            return $this->json(['error' => 'Token invalide'], Response::HTTP_FORBIDDEN);
        }

        $motif = trim($request->request->get('motif', ''));
        if (empty($motif)) {
            return $this->json(['error' => 'Veuillez fournir un motif de rejet'], Response::HTTP_BAD_REQUEST);
        }

        $joueur->setStatus('rejected');
        $joueur->setRejectMessage($motif);
        $em->flush();

        sweetalert()->addSuccess("Participant {$joueur->getNom()} {$joueur->getPrenoms()} rejeté.");

        return $this->json(['success' => true, 'message' => 'Participant rejeté']);
    }
}