<?php

namespace App\Controller\Frontend;

use App\Entity\Discipline;
use App\Entity\Joueur;
use App\Entity\Notification;
use App\Repository\AbonnementRepository;
use App\Repository\DisciplineRepository;
use App\Repository\JoueurRepository;
use App\Repository\MembreRepository;
use App\Repository\NotificationRepository;
use App\Service\AllRepositories;
use App\Service\GestionMedia;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/membre')]
class FrontendMembreController extends AbstractController
{
    public function __construct(
        private MembreRepository       $membreRepository,
        private AbonnementRepository   $abonnementRepository,
        private JoueurRepository       $joueurRepository,
        private DisciplineRepository   $disciplineRepository,
        private EntityManagerInterface $em,
        private AllRepositories        $allRepositories,
        private GestionMedia           $gestionMedia,
        private SerializerInterface    $serializer,
        private NotificationRepository $notificationRepository,
    )
    {
    }

    private function getMembre()
    {
        return $this->membreRepository->findOneBy(['user' => $this->getUser()->getId()]);
    }

    private function getAbonnement()
    {
        $membre = $this->getMembre();
        if (!$membre) return null;
        return $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );
    }

    private function joueurAppartientAuMembre(Joueur $joueur): bool
    {
        $abonnement = $this->getAbonnement();
        return $abonnement && $joueur->getAbonnement() && $joueur->getAbonnement()->getId() === $abonnement->getId();
    }

    private function jsonError(string $message, int $status = Response::HTTP_FORBIDDEN): JsonResponse
    {
        return $this->json(['error' => $message], $status);
    }

    #[Route('/', name: 'app_frontend_membre_index')]
    public function index(): Response
    {
$membre = $this->membreRepository->findOneBy(['user' => $this->getUser()->getId()]);
        if (!$membre) {
            return $this->redirectToRoute('app_frontend_participation_non_membre');
        }

        $compagnieSlug = $membre->getCompagnie()?->getSlug() ?? 'inconnu';

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

$disciplines = [];
        $disciplineStats = [];
        $hasComplementaire = false;
        if ($abonnement) {
            $i = 0;
            foreach ($abonnement->getDisciplines() as $d) {
                $i++;
                $disciplines[] = $d;
                if ($i > 4) {
                    $hasComplementaire = true;
                }
                $count = count($this->joueurRepository->getNombreJoueurByAbonnementAndDiscipline(
                    $d->getId(), $abonnement->getId()
                ));
                $disciplineStats[$d->getId()] = [
                    'count' => $count,
                    'required' => (int) $d->getJoueur(),
                    'remaining' => max(0, (int) $d->getJoueur() - $count),
                ];
            }
        }

        $allDisciplines = $this->allRepositories->getAllDiscipline();
        $totalDisciplines = $abonnement ? count($disciplines) : 0;
        $montantAbonnement = $abonnement ? ($totalDisciplines > 4 ? 5000000 : 2500000) : 0;

        $montantAbonnement = $abonnement ? (count($disciplines) > 4 ? 5000000 : 2500000) : 0;

        $totalDisciplines = $abonnement ? count($disciplines) : 0;
        $montantAbonnement = $abonnement ? ($totalDisciplines > 4 ? 5000000 : 2500000) : 0;

        $unreadCount = $this->notificationRepository->countUnreadByUser($this->getUser()->getId());
        $notifications = $this->notificationRepository->findAllOrdered();

        return $this->render('frontend/membre_index.html.twig', [
            'abonnement' => $abonnement,
            'disciplines' => $disciplines,
            'disciplineStats' => $disciplineStats,
            'allDisciplines' => $allDisciplines,
            'selectedDisciplineIds' => array_map(fn($d) => $d->getId(), $disciplines),
            'compagnieSlug' => $compagnieSlug,
            'hasComplementaire' => $hasComplementaire,
            'montantAbonnement' => $montantAbonnement,
            'totalDisciplines' => $totalDisciplines,
            'unreadCount' => $unreadCount,
            'notifications' => $notifications,
        ]);
    }

    #[Route('/api/disciplines', name: 'app_frontend_membre_api_disciplines', methods: ['GET'])]
    public function apiDisciplines(): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        $data = [];
        if ($abonnement) {
            foreach ($abonnement->getDisciplines() as $d) {
                $count = count($this->joueurRepository->getNombreJoueurByAbonnementAndDiscipline(
                    $d->getId(), $abonnement->getId()
                ));
                $data[] = [
                    'id' => $d->getId(),
                    'titre' => $d->getTitre(),
                    'slug' => $d->getSlug(),
                    'count' => $count,
                    'required' => (int) $d->getJoueur(),
                    'remaining' => max(0, (int) $d->getJoueur() - $count),
                ];
            }
        }

        return $this->json([
            'disciplines' => $data,
            'abonnementId' => $abonnement?->getId(),
        ]);
    }

    #[Route('/api/participants', name: 'app_frontend_membre_api_participants', methods: ['GET'])]
    public function apiParticipants(Request $request): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        $page = max(1, $request->query->getInt('page', 1));
        $limit = max(10, min(100, $request->query->getInt('limit', 10)));
        $disciplineId = $request->query->getInt('discipline', 0);
        $search = $request->query->get('search', '');

        $offset = ($page - 1) * $limit;

        if (!$abonnement) {
            return $this->json(['data' => [], 'total' => 0, 'page' => 1, 'pages' => 0]);
        }

        $qb = $this->em->createQueryBuilder()
            ->select('j')
            ->addSelect('d')
            ->from(Joueur::class, 'j')
            ->leftJoin('j.discipline', 'd')
            ->where('j.abonnement = :abonnement')
            ->setParameter('abonnement', $abonnement);

        if ($disciplineId > 0) {
            $qb->andWhere('d.id = :disciplineId')
                ->setParameter('disciplineId', $disciplineId);
        }

        if (!empty($search)) {
            $qb->andWhere('(j.nom LIKE :search OR j.prenoms LIKE :search OR j.matricule LIKE :search OR j.email LIKE :search OR j.contact LIKE :search)')
                ->setParameter('search', "%{$search}%");
        }

        $total = (clone $qb)
            ->select('COUNT(DISTINCT j.id)')
            ->resetDQLPart('orderBy')
            ->getQuery()
            ->getSingleScalarResult();

        $joueurs = $qb->orderBy('j.id', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($joueurs as $joueur) {
            $disciplines = [];
            foreach ($joueur->getDiscipline() as $d) {
                $disciplines[] = ['id' => $d->getId(), 'titre' => $d->getTitre()];
            }
            $data[] = [
                'id' => $joueur->getId(),
                'nom' => $joueur->getNom(),
                'prenoms' => $joueur->getPrenoms(),
                'matricule' => $joueur->getMatricule(),
                'contact' => $joueur->getContact(),
                'email' => $joueur->getEmail(),
                'licence' => $joueur->getLicence(),
                'media' => $joueur->getMedia(),
                'carte' => $joueur->getCarte(),
                'slug' => $joueur->getSlug(),
                'status' => $joueur->getStatus(),
                'rejectMessage' => $joueur->getRejectMessage(),
                'disciplines' => $disciplines,
            ];
        }

        return $this->json([
            'data' => $data,
            'total' => (int) $total,
            'page' => $page,
            'pages' => max(1, (int) ceil($total / $limit)),
        ]);
    }

    #[Route('/api/discipline/ajouter', name: 'app_frontend_membre_api_discipline_add', methods: ['POST'])]
    public function addDiscipline(Request $request): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $disciplineIds = $request->request->all('disciplines');
        if (empty($disciplineIds)) {
            return $this->json(['error' => 'Aucune discipline sélectionnée'], Response::HTTP_BAD_REQUEST);
        }

        $disciplineIds = array_map('intval', (array) $disciplineIds);

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        if (!$abonnement) {
            $abonnement = new \App\Entity\Abonnement();
            $abonnement->setReference($this->genererReference());
            $abonnement->setCompagnie($membre->getCompagnie());
            $abonnement->setAnnee((int) date('Y'));
            $abonnement->setMontant($membre->getParticipation());
            $abonnement->setSolde(false);
            $abonnement->setTotalJoueur(0);
            $abonnement->setRestantJoueur(0);
            $abonnement->setCreatedAt(new \DateTime());
            $this->em->persist($abonnement);
        }

        $existingCount = count($abonnement->getDisciplines());

        $added = [];
        foreach ($disciplineIds as $did) {
            $discipline = $this->disciplineRepository->find($did);
            if (!$discipline) {
                continue;
            }
            if ($abonnement->getDisciplines()->contains($discipline)) {
                continue;
            }
            $abonnement->addDiscipline($discipline);
            $added[] = $discipline->getTitre();
        }

        $this->em->flush();

        if (empty($added)) {
            return $this->json(['error' => 'Toutes ces disciplines sont déjà sélectionnées'], Response::HTTP_BAD_REQUEST);
        }

        $msg = count($added) === 1
            ? "Discipline « {$added[0]} » ajoutée avec succès"
            : count($added) . " disciplines ajoutées avec succès";

        return $this->json(['success' => true, 'message' => $msg]);
    }

    #[Route('/api/discipline/{id}/supprimer', name: 'app_frontend_membre_api_discipline_remove', methods: ['DELETE'])]
    public function removeDiscipline(int $id): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        if (!$abonnement) {
            return $this->json(['error' => 'Aucun abonnement trouvé'], Response::HTTP_BAD_REQUEST);
        }

        $discipline = $this->disciplineRepository->find($id);
        if (!$discipline) {
            return $this->json(['error' => 'Discipline introuvable'], Response::HTTP_NOT_FOUND);
        }

        $abonnement->removeDiscipline($discipline);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Discipline retirée avec succès']);
    }

    #[Route('/api/discipline/{id}/modifier', name: 'app_frontend_membre_api_discipline_update', methods: ['PUT'])]
    public function updateDiscipline(Request $request, int $id): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);
        $newDisciplineId = $data['discipline'] ?? 0;

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        if (!$abonnement) {
            return $this->json(['error' => 'Aucun abonnement trouvé'], Response::HTTP_BAD_REQUEST);
        }

        $oldDiscipline = $this->disciplineRepository->find($id);
        $newDiscipline = $this->disciplineRepository->find($newDisciplineId);

        if (!$oldDiscipline || !$newDiscipline) {
            return $this->json(['error' => 'Discipline introuvable'], Response::HTTP_NOT_FOUND);
        }

        if ($abonnement->getDisciplines()->contains($newDiscipline)) {
            return $this->json(['error' => 'Cette discipline est déjà selectionnée'], Response::HTTP_BAD_REQUEST);
        }

        $currentJoueurs = $this->joueurRepository->getNombreJoueurByAbonnementAndDiscipline(
            $oldDiscipline->getId(), $abonnement->getId()
        );
        $maxNew = (int) $newDiscipline->getJoueur();

        if (count($currentJoueurs) > $maxNew) {
            return $this->json([
                'error' => "La discipline « {$newDiscipline->getTitre()} » n'accepte que {$maxNew} joueur(s). " .
                    "Vous avez actuellement " . count($currentJoueurs) . " joueur(s) dans « {$oldDiscipline->getTitre()} ». " .
                    "Veuillez retirer " . (count($currentJoueurs) - $maxNew) . " joueur(s) d'abord."
            ], Response::HTTP_BAD_REQUEST);
        }

        $abonnement->removeDiscipline($oldDiscipline);
        $abonnement->addDiscipline($newDiscipline);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Discipline modifiée avec succès']);
    }

    #[Route('/api/participant/{id}/discipline', name: 'app_frontend_membre_api_participant_discipline', methods: ['PUT'])]
    public function updateParticipantDiscipline(Request $request, Joueur $joueur): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }

        $data = json_decode($request->getContent(), true);
        $disciplineId = $data['discipline'] ?? 0;
        $membre = $this->getMembre();
        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        $newDiscipline = $this->disciplineRepository->find($disciplineId);
        if (!$newDiscipline) {
            return $this->json(['error' => 'Discipline introuvable'], Response::HTTP_NOT_FOUND);
        }

        if (!$abonnement || !$abonnement->getDisciplines()->contains($newDiscipline)) {
            return $this->json(['error' => 'Cette discipline n\'est pas dans votre abonnement'], Response::HTTP_BAD_REQUEST);
        }

        if ($joueur->getDiscipline()->contains($newDiscipline)) {
            return $this->json(['error' => 'Ce participant est déjà inscrit à cette discipline'], Response::HTTP_BAD_REQUEST);
        }

        $currentCount = count($this->joueurRepository->getNombreJoueurByAbonnementAndDiscipline(
            $newDiscipline->getId(), $abonnement->getId()
        ));
        $max = (int) $newDiscipline->getJoueur();
        if ($currentCount >= $max) {
            return $this->json([
                'error' => "La discipline « {$newDiscipline->getTitre()} » est complète ({$currentCount}/{$max} joueurs)."
            ], Response::HTTP_BAD_REQUEST);
        }

        $joueur->getDiscipline()->clear();
        $joueur->addDiscipline($newDiscipline);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Discipline du participant mise à jour']);
    }

    #[Route('/api/participant/{id}/photo', name: 'app_frontend_membre_api_participant_photo', methods: ['POST'])]
    public function updateParticipantPhoto(Request $request, Joueur $joueur): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }

        $file = $request->files->get('media');
        if (!$file) {
            return $this->json(['error' => 'Aucun fichier fourni'], Response::HTTP_BAD_REQUEST);
        }

        if ($joueur->getMedia()) {
            $this->removeParticipantFile($joueur->getMedia());
        }

        $newFile = $this->uploadParticipantFile($file);
        $joueur->setMedia($newFile);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Photo mise à jour', 'media' => $newFile]);
    }

    #[Route('/api/participant/{id}/carte', name: 'app_frontend_membre_api_participant_carte', methods: ['POST'])]
    public function updateParticipantCarte(Request $request, Joueur $joueur): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }

        $file = $request->files->get('carte');
        if (!$file) {
            return $this->json(['error' => 'Aucun fichier fourni'], Response::HTTP_BAD_REQUEST);
        }

        if ($joueur->getCarte()) {
            $this->removeParticipantFile($joueur->getCarte());
        }

        $newFile = $this->uploadParticipantFile($file);
        $joueur->setCarte($newFile);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Carte mise à jour', 'carte' => $newFile]);
    }

    #[Route('/api/participant/{id}/discipline/{disciplineId}', name: 'app_frontend_membre_api_participant_discipline_remove', methods: ['DELETE'])]
    public function removeDisciplineFromParticipant(Joueur $joueur, int $disciplineId): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }

        $discipline = $this->disciplineRepository->find($disciplineId);
        if (!$discipline) {
            return $this->json(['error' => 'Discipline introuvable'], Response::HTTP_NOT_FOUND);
        }

        $joueur->removeDiscipline($discipline);
        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Participant retiré de la discipline']);
    }

    #[Route('/api/participant/{id}', name: 'app_frontend_membre_api_participant_delete', methods: ['DELETE'])]
    public function deleteParticipant(Joueur $joueur): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }
        $membre = $this->getMembre();
        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        if ($joueur->getMedia()) {
            $this->removeParticipantFile($joueur->getMedia());
        }
        if ($joueur->getCarte()) {
            $this->removeParticipantFile($joueur->getCarte());
        }

        $joueur->getDiscipline()->clear();
        $this->em->remove($joueur);

        if ($abonnement) {
            $abonnement->setRestantJoueur((int)$abonnement->getRestantJoueur() + 1);
        }

        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Participant supprimé']);
    }

    #[Route('/api/participant/{id}/informations', name: 'app_frontend_membre_api_participant_info', methods: ['PUT'])]
    public function updateParticipantInfo(Request $request, Joueur $joueur): JsonResponse
    {
        if (!$this->joueurAppartientAuMembre($joueur)) {
            return $this->jsonError('Accès refusé');
        }

        $data = json_decode($request->getContent(), true);

        if (!empty($data['nom'])) $joueur->setNom($data['nom']);
        if (!empty($data['prenoms'])) $joueur->setPrenoms($data['prenoms']);
        if (!empty($data['matricule'])) $joueur->setMatricule($data['matricule']);
        if (!empty($data['contact'])) $joueur->setContact($data['contact']);
        if (!empty($data['email'])) $joueur->setEmail($data['email']);

        $this->em->flush();

        return $this->json(['success' => true, 'message' => 'Informations mises à jour']);
    }

    #[Route('/api/disponibles', name: 'app_frontend_membre_api_disponibles', methods: ['GET'])]
    public function apiDisponibles(): JsonResponse
    {
        $membre = $this->getMembre();
        if (!$membre) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $abonnement = $this->abonnementRepository->findOneBy(
            ['compagnie' => $membre->getCompagnie()],
            ['id' => 'DESC']
        );

        $all = $this->disciplineRepository->findBy([], ['titre' => 'ASC']);
        $selectedIds = [];
        if ($abonnement) {
            foreach ($abonnement->getDisciplines() as $d) {
                $selectedIds[] = $d->getId();
            }
        }

        $disponibles = [];
        foreach ($all as $d) {
            if (!in_array($d->getId(), $selectedIds)) {
                $disponibles[] = ['id' => $d->getId(), 'titre' => $d->getTitre()];
            }
        }

        return $this->json(['disciplines' => $disponibles]);
    }

    #[Route('/api/participants/sans-discipline', name: 'app_frontend_membre_api_participants_sans_discipline', methods: ['GET'])]
    public function apiParticipantsSansDiscipline(): JsonResponse
    {
        $abonnement = $this->getAbonnement();
        if (!$abonnement) {
            return $this->json(['data' => []]);
        }

        $joueurs = $this->em->createQueryBuilder()
            ->select('j')
            ->from(Joueur::class, 'j')
            ->leftJoin('j.discipline', 'd')
            ->where('j.abonnement = :abonnement')
            ->andWhere('d.id IS NULL')
            ->setParameter('abonnement', $abonnement)
            ->orderBy('j.nom', 'ASC')
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($joueurs as $j) {
            $data[] = [
                'id' => $j->getId(),
                'nom' => $j->getNom() . ' ' . $j->getPrenoms(),
                'matricule' => $j->getMatricule(),
            ];
        }

        return $this->json(['data' => $data]);
    }

    #[Route('/api/discipline/{id}/assign-participants', name: 'app_frontend_membre_api_participants_assign_discipline', methods: ['POST'])]
    public function assignParticipantsToDiscipline(Request $request, Discipline $discipline): JsonResponse
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        if (!$abonnement->getDisciplines()->contains($discipline)) {
            return $this->json(['error' => 'Cette discipline n\'est pas dans votre abonnement'], Response::HTTP_BAD_REQUEST);
        }

        $data = json_decode($request->getContent(), true);
        $participantIds = $data['participants'] ?? [];
        if (empty($participantIds)) {
            return $this->json(['error' => 'Aucun participant sélectionné'], Response::HTTP_BAD_REQUEST);
        }

        $count = 0;
        foreach ($participantIds as $pid) {
            $joueur = $this->em->find(Joueur::class, (int) $pid);
            if (!$joueur || $joueur->getAbonnement()->getId() !== $abonnement->getId()) {
                continue;
            }
            if ($joueur->getDiscipline()->contains($discipline)) {
                continue;
            }
            $joueur->addDiscipline($discipline);
            $count++;
        }

        $this->em->flush();

        return $this->json([
            'success' => $count > 0,
            'message' => "$count participant(s) assigné(s) à la discipline",
        ]);
    }

    #[Route('/api/notifications/marque-lue/{id}', name: 'app_frontend_membre_api_notification_read', methods: ['POST'])]
    public function markNotificationRead(Notification $notification): JsonResponse
    {
        $notification->markReadBy($this->getUser()->getId());
        $this->em->flush();
        return $this->json(['success' => true]);
    }

    private function genererReference(): string
    {
        $last = $this->abonnementRepository->findOneBy([], ['id' => 'DESC']);
        $ref = $last ? $last->getId() : 1;
        if ($ref < 10) $ref = "0{$ref}";
        return date('ymd') . $ref;
    }

    #[Route('/import', name: 'app_frontend_membre_import')]
    public function import(): Response
    {
        $membre = $this->getMembre();
        $disciplines = [];
        if ($membre) {
            $abonnement = $this->getAbonnement();
            if ($abonnement) {
                $disciplines = $abonnement->getDisciplines();
            }
        }
        return $this->render('frontend/membre_import.html.twig', [
            'disciplines' => $disciplines,
            'compagnieSlug' => $membre?->getCompagnie()?->getSlug() ?? 'inconnu',
        ]);
    }

    #[Route('/facture', name: 'app_frontend_membre_facture')]
    public function facture(): Response
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            return $this->redirectToRoute('app_frontend_membre_index');
        }

        $disciplines = $abonnement->getDisciplines();
        $total = count($disciplines);
        $montant = $total > 4 ? 5000000 : 2500000;

        return $this->render('frontend/membre_facture.html.twig', [
            'abonnement' => $abonnement,
            'membre' => $membre,
            'compagnie' => $membre->getCompagnie(),
            'disciplines' => $disciplines,
            'montant' => $montant,
            'totalDisciplines' => $total,
            'joueurs' => $this->joueurRepository->getJoueursByAbonnement($abonnement->getId()),
        ]);
    }

    #[Route('/facture/pdf', name: 'app_frontend_membre_facture_pdf')]
    public function facturePdf(): Response
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            throw $this->createNotFoundException();
        }

        $disciplines = $abonnement->getDisciplines();
        $total = count($disciplines);
        $montant = $total > 4 ? 5000000 : 2500000;

        $html = $this->renderView('frontend/facture_pdf.html.twig', [
            'abonnement' => $abonnement,
            'compagnie' => $membre->getCompagnie(),
            'disciplines' => $disciplines,
            'montant' => $montant,
            'totalDisciplines' => $total,
        ]);

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response($dompdf->output(), Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition(
                HeaderUtils::DISPOSITION_ATTACHMENT,
                'facture_' . $abonnement->getReference() . '.pdf'
            ),
        ]);
    }

    #[Route('/facture/reçu', name: 'app_frontend_membre_facture_recu', methods: ['POST'])]
    public function uploadRecu(Request $request): JsonResponse
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $file = $request->files->get('recu');
        if (!$file) {
            return $this->json(['error' => 'Aucun fichier fourni'], Response::HTTP_BAD_REQUEST);
        }

        $dir = $this->getParameter('kernel.project_dir') . '/public/upload/justificatifs';
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        if ($abonnement->getJustificatif()) {
            $oldPath = $dir . '/' . $abonnement->getJustificatif();
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $filename = 'recu-' . $abonnement->getReference() . '-' . time() . '.' . $file->guessExtension();
        $file->move($dir, $filename);
        $abonnement->setJustificatif($filename);
        $abonnement->setSolde(true);
        $this->em->flush();

        sweetalert()->addSuccess('Reçu de paiement envoyé avec succès!');

        return $this->json(['success' => true, 'message' => 'Reçu envoyé']);
    }

    #[Route('/ajouter-participant', name: 'app_frontend_membre_add_participant')]

    #[Route('/ajouter-participant', name: 'app_frontend_membre_add_participant')]
    public function addParticipant(): Response
    {
        $membre = $this->getMembre();
        $disciplines = [];
        if ($membre) {
            $abonnement = $this->getAbonnement();
            if ($abonnement) {
                $disciplines = $abonnement->getDisciplines();
            }
        }
        return $this->render('frontend/membre_add_participant.html.twig', [
            'disciplines' => $disciplines,
            'compagnieSlug' => $membre?->getCompagnie()?->getSlug() ?? 'inconnu',
        ]);
    }

    #[Route('/api/import/process', name: 'app_frontend_membre_api_import_process', methods: ['POST'])]
    public function apiImportProcess(Request $request): JsonResponse
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);
        $rows = $data['rows'] ?? [];
        $chunkIndex = $data['chunkIndex'] ?? 0;

        if (empty($rows)) {
            return $this->json(['success' => true, 'processed' => 0, 'done' => true]);
        }

        $disciplineMap = [];
        foreach ($abonnement->getDisciplines() as $d) {
            $disciplineMap[$d->getId()] = $d;
        }

        $disciplineId = $data['disciplineId'] ?? 0;
        $targetDiscipline = $disciplineId > 0 && isset($disciplineMap[$disciplineId])
            ? $disciplineMap[$disciplineId]
            : null;

        $slugify = new \Symfony\Component\String\Slugger\AsciiSlugger();
        $processed = 0;
        $errors = [];
        $skipped = 0;

        $existingJoueurs = $this->em->createQueryBuilder()
            ->select('j.matricule', 'j.nom', 'j.prenoms')
            ->from(Joueur::class, 'j')
            ->where('j.abonnement = :abonnement')
            ->setParameter('abonnement', $abonnement)
            ->getQuery()
            ->getArrayResult();

        $existingMatricules = [];
        $existingNames = [];
        foreach ($existingJoueurs as $ej) {
            if (!empty($ej['matricule'])) {
                $existingMatricules[strtoupper(trim($ej['matricule']))] = true;
            }
            $key = strtoupper(trim($ej['nom'] ?? '') . '|' . trim($ej['prenoms'] ?? ''));
            $existingNames[$key] = true;
        }

        foreach ($rows as $row) {
            $nom = self::normalizeName($row['NOM'] ?? '');
            $prenom = self::normalizeName($row['PRENOM'] ?? '');
            $telephone = trim($row['TELEPHONE'] ?? '');
            $email = trim($row['EMAIL'] ?? '');
            $matricule = trim($row['MATRICULE'] ?? '');

            if (empty($nom) || empty($prenom)) {
                continue;
            }

            $matKey = strtoupper($matricule);
            $nameKey = $nom . '|' . $prenom;

            if (!empty($matricule) && isset($existingMatricules[$matKey])) {
                $skipped++;
                continue;
            }
            if (isset($existingNames[$nameKey])) {
                $skipped++;
                continue;
            }

            $existingMatricules[$matKey] = true;
            $existingNames[$nameKey] = true;

            $slug = $slugify->slug(strtolower($nom . '-' . $prenom . '-' . $matricule . '-' . uniqid()));

            $joueur = new Joueur();
            $joueur->setNom($nom);
            $joueur->setPrenoms($prenom);
            $joueur->setContact($telephone);
            $joueur->setEmail($email);
            $joueur->setMatricule($matricule);
            $joueur->setSlug($slug);
            $joueur->setLicence($this->allRepositories->generateLicence());
            $joueur->setAbonnement($abonnement);

            if ($targetDiscipline) {
                $joueur->addDiscipline($targetDiscipline);
            }

            $this->em->persist($joueur);
            $processed++;
        }

        if ($processed > 0) {
            $abonnement->setRestantJoueur(max(0, (int)$abonnement->getRestantJoueur() - $processed));
        }

        $this->em->flush();

        return $this->json([
            'success' => true,
            'processed' => $processed,
            'errors' => $errors,
            'skipped' => $skipped,
            'chunkIndex' => $chunkIndex,
            'done' => true,
        ]);
    }

    #[Route('/api/participant/manual', name: 'app_frontend_membre_api_add_participant_manual', methods: ['POST'])]
    public function apiAddParticipantManual(Request $request): JsonResponse
    {
        $membre = $this->getMembre();
        $abonnement = $this->getAbonnement();
        if (!$membre || !$abonnement) {
            return $this->json(['error' => 'Accès refusé'], Response::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);
        $participants = $data['participants'] ?? [];

        if (empty($participants)) {
            return $this->json(['error' => 'Aucun participant fourni'], Response::HTTP_BAD_REQUEST);
        }

        $slugify = new \Symfony\Component\String\Slugger\AsciiSlugger();
        $created = 0;
        $errors = [];

        // Pre-charge existing matricules et noms pour la vérification des doublons
        $existing = $this->em->createQueryBuilder()
            ->select('j.matricule', 'j.nom', 'j.prenoms')
            ->from(Joueur::class, 'j')
            ->where('j.abonnement = :abonnement')
            ->setParameter('abonnement', $abonnement)
            ->getQuery()
            ->getArrayResult();

        $existingMatricules = [];
        $existingNames = [];
        foreach ($existing as $ej) {
            if (!empty($ej['matricule'])) {
                $existingMatricules[strtoupper(trim($ej['matricule']))] = true;
            }
            $existingNames[strtoupper(trim($ej['nom'] ?? '') . '|' . trim($ej['prenoms'] ?? ''))] = true;
        }

        foreach ($participants as $idx => $p) {
            $nom = self::normalizeName($p['nom'] ?? '');
            $prenom = self::normalizeName($p['prenoms'] ?? '');
            $contact = trim($p['contact'] ?? '');
            $email = trim($p['email'] ?? '');
            $matricule = trim($p['matricule'] ?? '');

            if (empty($nom) || empty($prenom)) {
                $errors[] = "Ligne " . ($idx + 1) . " : nom et prénom obligatoires";
                continue;
            }

            $matKey = strtoupper($matricule);
            $nameKey = $nom . '|' . $prenom;

            if (!empty($matricule) && isset($existingMatricules[$matKey])) {
                $errors[] = "Ligne " . ($idx + 1) . " : matricule '$matricule' déjà existant";
                continue;
            }
            if (isset($existingNames[$nameKey])) {
                $errors[] = "Ligne " . ($idx + 1) . " : $nom $prenom déjà existant";
                continue;
            }

            $existingMatricules[$matKey] = true;
            $existingNames[$nameKey] = true;

            $slug = $slugify->slug(strtolower($nom . '-' . $prenom . '-' . $matricule . '-' . uniqid()));

            $joueur = new Joueur();
            $joueur->setNom($nom);
            $joueur->setPrenoms($prenom);
            $joueur->setContact($contact);
            $joueur->setEmail($email);
            $joueur->setMatricule($matricule);
            $joueur->setSlug($slug);
            $joueur->setLicence($this->allRepositories->generateLicence());
            $joueur->setAbonnement($abonnement);

            $this->em->persist($joueur);
            $created++;
        }

        if ($created > 0) {
            $abonnement->setRestantJoueur(max(0, (int)$abonnement->getRestantJoueur() - $created));
        }

        $this->em->flush();

        $msg = "$created participant(s) ajouté(s) avec succès";
        if (!empty($errors)) {
            $msg .= ' (' . count($errors) . ' erreur(s) ignorée(s))';
        }

        return $this->json([
            'success' => $created > 0,
            'message' => $msg,
            'errors' => $errors,
        ]);
    }

    private static function normalizeName(string $name): string
    {
        $name = trim($name);
        $name = strtr($name, [
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a',
            'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
            'ñ' => 'n',
            'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
            'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
            'ý' => 'y', 'ÿ' => 'y',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A',
            'Ç' => 'C',
            'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
            'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
            'Ñ' => 'N',
            'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O',
            'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U',
            'Ý' => 'Y',
        ]);
        return strtoupper($name);
    }

    private function getParticipantUploadDir(): string
    {
        $membre = $this->getMembre();
        $slug = $membre?->getCompagnie()?->getSlug() ?? 'inconnu';
        $dir = $this->getParameter('kernel.project_dir') . '/public/upload/participant/' . $slug;
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        return $dir;
    }

    private function uploadParticipantFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file): string
    {
        $slugify = new \Symfony\Component\String\Slugger\AsciiSlugger();
        $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safe = $slugify->slug($original);
        $filename = $safe . '-' . time() . '.' . $file->guessExtension();
        $file->move($this->getParticipantUploadDir(), $filename);
        return $filename;
    }

    private function removeParticipantFile(string $filename): void
    {
        $path = $this->getParticipantUploadDir() . '/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
    }

    #[Route('/export/disciplines/{format}', name: 'app_frontend_membre_export_disciplines')]
    public function exportDisciplines(string $format): Response
    {
        $abonnement = $this->getAbonnement();
        if (!$abonnement) {
            throw $this->createNotFoundException();
        }

        $rows = [];
        foreach ($abonnement->getDisciplines() as $d) {
            $count = count($this->joueurRepository->getNombreJoueurByAbonnementAndDiscipline(
                $d->getId(), $abonnement->getId()
            ));
            $rows[] = [
                $d->getTitre(),
                (string) $count,
                (string) $d->getJoueur(),
                (string) max(0, (int) $d->getJoueur() - $count),
            ];
        }

        $headers = ['Discipline', 'Inscrits', 'Requis', 'Restant'];

        return match ($format) {
            'csv' => $this->exportCsv($rows, $headers, 'disciplines'),
            'xlsx' => $this->exportXlsx($rows, $headers, 'disciplines'),
            'pdf' => $this->exportPdf($rows, $headers, 'disciplines', 'Disciplines souscrites'),
            default => throw $this->createNotFoundException(),
        };
    }

    #[Route('/export/participants/{format}', name: 'app_frontend_membre_export_participants')]
    public function exportParticipants(string $format): Response
    {
        $abonnement = $this->getAbonnement();
        if (!$abonnement) {
            throw $this->createNotFoundException();
        }

        $joueurs = $this->joueurRepository->getJoueursByAbonnement($abonnement->getId());
        $rows = [];
        foreach ($joueurs as $j) {
            $disciplines = [];
            foreach ($j->getDiscipline() as $d) {
                $disciplines[] = $d->getTitre();
            }
            $rows[] = [
                $j->getNom(),
                $j->getPrenoms(),
                $j->getMatricule(),
                $j->getContact(),
                $j->getEmail(),
                $j->getLicence(),
                implode(', ', $disciplines),
            ];
        }

        $headers = ['Nom', 'Prénom(s)', 'Matricule', 'Téléphone', 'Email', 'Licence', 'Discipline(s)'];

        return match ($format) {
            'csv' => $this->exportCsv($rows, $headers, 'participants'),
            'xlsx' => $this->exportXlsx($rows, $headers, 'participants'),
            'pdf' => $this->exportPdfWithImages($rows, $headers, 'participants', 'Liste des participants', $joueurs),
            default => throw $this->createNotFoundException(),
        };
    }

    private function exportCsv(array $rows, array $headers, string $filename): Response
    {
        $handle = fopen('php://temp', 'r+');
        fputcsv($handle, $headers);
        foreach ($rows as $row) {
            fputcsv($handle, $row);
        }
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT, $filename . '.csv'
        ));
        return $response;
    }

    private function exportXlsx(array $rows, array $headers, string $filename): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($headers as $i => $h) {
            $col = chr(65 + $i);
            $sheet->setCellValue($col . '1', $h);
            $sheet->getStyle($col . '1')->getFont()->setBold(true);
            $sheet->getStyle($col . '1')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FF468F34');
            $sheet->getStyle($col . '1')->getFont()->getColor()->setARGB('FFFFFFFF');
        }

        foreach ($rows as $ri => $row) {
            foreach ($row as $ci => $val) {
                $col = chr(65 + $ci);
                $sheet->setCellValue($col . ($ri + 2), $val);
            }
        }

        foreach (range('A', chr(64 + count($headers))) as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        $writer = new Xlsx($spreadsheet);
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();

        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT, $filename . '.xlsx'
        ));
        return $response;
    }

    private function exportPdf(array $rows, array $headers, string $filename, string $title): Response
    {
        $html = $this->renderView('frontend/export_table.html.twig', [
            'title' => $title,
            'headers' => $headers,
            'rows' => $rows,
            'showImages' => false,
        ]);

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response($dompdf->output(), Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition(
                HeaderUtils::DISPOSITION_ATTACHMENT, $filename . '.pdf'
            ),
        ]);
    }

    private function exportPdfWithImages(array $rows, array $headers, string $filename, string $title, iterable $joueurs): Response
    {
        $dir = $this->getParticipantUploadDir();
        $imageRows = [];
        foreach ($joueurs as $j) {
            $photo = '';
            $carte = '';
            if ($j->getMedia() && file_exists($dir . '/' . $j->getMedia())) {
                $photo = $dir . '/' . $j->getMedia();
            }
            if ($j->getCarte() && file_exists($dir . '/' . $j->getCarte())) {
                $carte = $dir . '/' . $j->getCarte();
            }
            $disciplines = [];
            foreach ($j->getDiscipline() as $d) {
                $disciplines[] = $d->getTitre();
            }
            $imageRows[] = [
                'photo' => $photo,
                'carte' => $carte,
                'nom' => $j->getNom(),
                'prenoms' => $j->getPrenoms(),
                'matricule' => $j->getMatricule(),
                'contact' => $j->getContact(),
                'email' => $j->getEmail(),
                'licence' => $j->getLicence(),
                'disciplines' => implode(', ', $disciplines),
            ];
        }

        $html = $this->renderView('frontend/export_participants_pdf.html.twig', [
            'title' => $title,
            'headers' => $headers,
            'rows' => $imageRows,
        ]);

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response($dompdf->output(), Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition(
                HeaderUtils::DISPOSITION_ATTACHMENT, $filename . '.pdf'
            ),
        ]);
    }
}