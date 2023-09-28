<?php

namespace App\Controller\Api;

use App\Entity\Abonnement;
use App\Entity\Joueur;
use App\Repository\AbonnementRepository;
use App\Repository\DisciplineRepository;
use App\Repository\MembreRepository;
use App\Service\AllRepositories;
use App\Service\GestionMedia;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;

#[Route('/api/discipline')]
class ApiDisciplineController extends AbstractController
{
    public function __construct(
        private AllRepositories $allRepositories,
        private SerializerInterface $serializer,
        private MembreRepository $membreRepository,
        private AbonnementRepository $abonnementRepository,
        private DisciplineRepository $disciplineRepository,
        private EntityManagerInterface $entityManager,
        private GestionMedia $gestionMedia
    )
    {
    }

    #[Route('/', name: 'api_discipline_index', methods: ['GET'])]
    public function index()
    {
        $discipline = $this->allRepositories->getAllDiscipline(); //dd($discipline);

        $jsonDiscipline = $this->serializer->serialize($discipline, 'json', ['groups' => 'participation']);

        //dd($jsonDiscipline);

        return new JsonResponse($jsonDiscipline, Response::HTTP_OK, [], true);
    }

    #[Route('/abonnement', name: 'api_discipline_abonnement', methods: ['POST'])]
    public function abonnement(Request $request)
    {
        $datas = json_decode($request->getContent(), true);
        if (!$datas || empty($datas['disciplines'])){
            sweetalert()->addError("Echec, Veuillez choisir les disciplines !");
            return $this->json([
                'message' => "Echec, veuillez choisir les disciplines",
                'statut' => "Echec"
            ]);
        }

        // Utilisateur, verification du membre
        $user = $this->getUser();
        $membre = $this->membreRepository->findOneBy(['user' => $user]);
        if (!$membre){
            sweetalert()->addError("Echec, votre compte ne vous autorise pas à choisir des disciplines");
            return $this->json([
                'message' => "Echec, votre compte ne vous autorise pas à choisir des disciplines",
                'statut' => 'Echec'
            ], Response::HTTP_OK);
        }

        $abonnement = new Abonnement();
        $abonnement->setReference($this->reference());
        $abonnement->setCompagnie($membre->getCompagnie());
        $abonnement->setAnnee(date('Y'));
        $abonnement->setMontant(1500000);
        $abonnement->setSolde(false);

        foreach ($datas['disciplines'] as $data){
            $discipline =$this->disciplineRepository->findOneBy(['id' => $data]) ;
            if ($discipline) {
                $abonnement->addDiscipline($discipline);
            }
        }

        $this->entityManager->persist($abonnement);
        $this->entityManager->flush();

        sweetalert()->addSuccess("Vos disciplines ont été sauvegardées avec succès!");

        return $this->json([
            'message' => 'Vos disciplines ont été sauvegardées avec succès!',
            'statut' => "success",
        ]);
    }

    #[Route('/participation', name: 'api_discipline_participation' ,methods: ['GET'])]
    public function participation(Request $request)
    {
        // Utilisateur, verification du membre
        $user = $this->getUser();
        $membre = $this->membreRepository->findOneBy(['user' => $user]);
        if (!$membre){
            sweetalert()->addError("Echec, votre compte ne vous autorise pas à choisir des disciplines");
            return $this->json([
                'message' => "Echec, votre compte ne vous autorise pas à choisir des disciplines",
                'statut' => 'Echec'
            ], Response::HTTP_OK);
        }

        $abonnement = $this->abonnementRepository->findOneBy(['compagnie' => $membre->getCompagnie()],['id' => "DESC"]);

        $disciplines=[];
        foreach ($abonnement->getDisciplines() as $discipline){
            $disciplines[] = $discipline;
        }

        $jsonDiscipline = $this->serializer->serialize($disciplines, 'json', ['groups' => 'participation']);

        //dd($jsonDiscipline);

        return new JsonResponse($jsonDiscipline, Response::HTTP_OK, [], true);
    }

    #[Route('/participation/membre', name: 'api_discipline_membre', methods: ['POST'])]
    public function membre(Request $request)
    {
        $disciplineId = $request->request->get('discipline');
        $nom = $request->request->get('nom');
        $prenoms = $request->request->get('prenoms');
        $matricule = $request->request->get('matricule');
        $contact = $request->request->get('contact');
        $email = $request->request->get('email');
        $mediaFile = $request->files->get('media');

        // Vous pouvez également gérer le fichier uploadé (photo) ici
        $media = $request->files->get('media');

        // Utilisateur, verification du membre
        $user = $this->getUser();
        $membre = $this->membreRepository->findOneBy(['user' => $user]);
        if (!$membre){
            sweetalert()->addError("Echec, votre compte ne vous autorise pas à choisir des disciplines");
            return $this->json([
                'message' => "Echec, votre compte ne vous autorise pas à choisir des disciplines",
                'statut' => 'Echec'
            ], Response::HTTP_OK);
        }

        $discipline = $this->disciplineRepository->findOneBy(['id'=> $disciplineId]);

        $joueur = new Joueur();
        $joueur->setNom($nom);
        $joueur->setPrenoms($prenoms);
        $joueur->setContact($contact);
        $joueur->setEmail($email);
        $joueur->setMatricule($matricule);
        $joueur->setSlug((new AsciiSlugger())->slug(strtolower($nom.'-'.$prenoms.'-'.$matricule)));
        $joueur->setLicence($this->allRepositories->generateLicence());
        $joueur->setMedia($this->gestionMedia->upload($mediaFile, 'participant'));
        $joueur->addDiscipline($discipline);

        $this->entityManager->persist($joueur);
        $this->entityManager->flush();

        sweetalert()->addSuccess("Le participant a été ajouté avec succès!");

        return $this->json([
            'message' => 'Le participant a été ajouté avec succès! avec succès!',
            'statut' => "success",
        ]);
    }

    private function reference(): string
    {
        $last = $this->abonnementRepository->findOneBy([],['id'=>"DESC"]);
        $ref = $last ? $last->getId() : 1;

        if ($ref < 10) $ref = "0{$ref}";

        return date('ymd').$ref;
    }
}