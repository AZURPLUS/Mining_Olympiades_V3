<?php

namespace App\Command;

use App\Entity\Discipline;
use App\Repository\DisciplineRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:insert-discipline',
    description: 'Insertion des disciplines dans la base de données',
)]
class InsertDisciplineCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private DisciplineRepository $disciplineRepository
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $i=0;
        foreach ($this->dataInsert() as $data){
            $discipline = $this->disciplineRepository->findOneBy(['titre' => $data[0]]);
            if (!$discipline) $discipline = new Discipline();

            $discipline->setTitre($data[0]);
            $discipline->setSlug($data[1]);
            $discipline->setJoueur($data[2]);
            $discipline->setComplementaire($data[3]);

            $this->entityManager->persist($discipline);
            $i++;
        }

        $this->entityManager->flush();

        $io->success("{$i} disciplines sauvegardées avec succès!");

        return Command::SUCCESS;
    }

    private function dataInsert()
    {
        return [
            ['MARACANA ZONE', 'maracana-zone', 9, false],
            ['FOOTBALL', 'football', 14, false],
            ['BASKET BALL', 'basket-ball', 10, false],
            ['VOLLEY-BALL', 'volley-ball', 9, false],
            ['4x100 relai', '4x100-relai', 4, false],
            ['BABY FOOT', 'baby-foot', 2, true],
            ['GENIE EN HERBE', 'genie-en-herbe', 2, true],
            ['GOLF', 'golf', 1, true],
            ['PETANQUE', 'petanque', 1, true],
            ['SCRABBLE', 'scrabble', 1, true],
            ['NATATION', 'natation', 1, true],
            ['TENNIS DE TABLE', 'tennis-de-table', 1, true],
            ['JEU VIDEO FOOTBALL (PS4)', 'jeu-video-football-ps4', 1, true],
            ['DAMES', 'dames', 1, true],
            ['MARATHON 1500M', 'marathon-150m', 1, true],
            ['AWALE', 'awale', 1, true],
            ['LUDO', 'ludo', 1, true],
            ['PETITS POTEAUX', 'petits-poteaux', 9, false],
            ['100 METRES', '100m', 1, true],
            ['200M METRES', '200m', 1, true],
            ['MARCHE DES SENIORS', 'marche-des-seniors', 1, true],
            ['CARREAU CHINOIS', 'carreau-chinois', 1, true],
            ['COURSE EN SAC', 'course-en-sac', 1, true],
            
        ];
    }
}
