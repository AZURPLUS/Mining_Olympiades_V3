<?php

namespace App\Controller\Backend;

use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backend/notification')]
class BackendNotificationController extends AbstractController
{
    #[Route('/', name: 'app_backend_notification_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $notifications = $em->getRepository(Notification::class)->findBy([], ['createdAt' => 'DESC']);
        return $this->render('backend_notification/index.html.twig', [
            'notifications' => $notifications,
        ]);
    }

    #[Route('/new', name: 'app_backend_notification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $title = trim($request->request->get('title', ''));
            $message = trim($request->request->get('message', ''));

            if (empty($title) || empty($message)) {
                sweetalert()->addError('Le titre et le message sont obligatoires.');
                return $this->redirectToRoute('app_backend_notification_new');
            }

            $notification = new Notification();
            $notification->setTitle($title);
            $notification->setMessage($message);
            $notification->setCreatedAt(new \DateTime());
            $notification->setReadBy([]);

            $em->persist($notification);
            $em->flush();

            sweetalert()->addSuccess('Notification envoyée à tous les abonnés!');
            return $this->redirectToRoute('app_backend_notification_index');
        }

        return $this->render('backend_notification/new.html.twig');
    }
}