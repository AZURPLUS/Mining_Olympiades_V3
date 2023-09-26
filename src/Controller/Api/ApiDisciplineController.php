<?php

namespace App\Controller\Api;

use App\Service\AllRepositories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/discipline')]
class ApiDisciplineController extends AbstractController
{
    public function __construct(
        private AllRepositories $allRepositories,
        private SerializerInterface $serializer
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
}