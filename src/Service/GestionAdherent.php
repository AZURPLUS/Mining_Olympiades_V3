<?php

namespace App\Service;

use App\Entity\Adhesion;
use App\Entity\Compagnie;
use App\Entity\Membre;
use App\Entity\User;
use App\Repository\CompagnieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class GestionAdherent
{
    private $motDePasse;
    public function __construct(
        private EntityManagerInterface $entityManager,
        private MailerInterface $mailer,
        private CompagnieRepository $compagnieRepository,
        private UserPasswordHasherInterface $passwordHasher

    ) {}

    public function validation(Adhesion $adhesion): void
    {
        $compagnie = new Compagnie();
        $compagnie->setTitre($adhesion->getEntreprise());
        $compagnie->setRepresentant($adhesion->getCivilite() . ' ' . $adhesion->getNom() . ' ' . $adhesion->getPrenoms());
        $compagnie->setDg($adhesion->getCivilite() . ' ' . $adhesion->getNom() . ' ' . $adhesion->getPrenoms());
        $compagnie->setContact($adhesion->getTelephone());
        $compagnie->setSlug($adhesion->getSlug());
        $compagnie->setEmail($adhesion->getEmail());

        $this->entityManager->persist($compagnie);
        $adhesion->setStatut(true);
        $this->entityManager->flush();

        $this->form($adhesion);
        $this->notification($adhesion);
    }


    public function notification(Adhesion $adhesion): void
    {
        // Variables dynamiques
        $prenom = $adhesion->getPrenoms(); // Extrait le prénom de l'adhérent
        $emailUtilisateur = $adhesion->getEmail(); // Extrait l'adresse e-mail de l'adhérent
        // $this->motDePasse = $this->generateRandomPassword() ?? 'motDePasseGenere'; // Générer ou récupérer un mot de passe
        // Corps de l'e-mail en HTML
        $htmlContent = "
        <html>
        <body>
            <p>Bonjour $prenom,</p>
            <p>Félicitations ! Votre inscription à <strong>Mining Olympiades 2024</strong> a été validée avec succès.</p>
            <p>Nous sommes ravis de vous compter parmi les participants de cet événement.</p>
            <p>Pour accéder à votre espace personnel et choisir vos disciplines, voici vos identifiants de connexion :</p>
            <ul>
                <li><strong>Nom d’utilisateur :</strong> $emailUtilisateur</li>
                <li><strong>Mot de passe :</strong> $this->motDePasse </li>
            </ul>
            <p>Veuillez vous connecter dès maintenant sur <a href='https://miningolympiades.org/login'>votre espace personnel</a>.</p>
            <p>Cordialement !</p>
            <p><strong>Contacts :</strong> (+225) 27 22 403 966 / 05 76 126 645</p>
        </body>
        </html>
    ";

        // Création de l'email
        $email = (new Email())
            ->from('info@miningolympiades.org')
            ->to($emailUtilisateur)
            ->subject('Confirmation de votre inscription et informations de connexion')
            ->html($htmlContent); // Corps de l'email au format HTML

        // Envoi de l'email
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            // Gérer les erreurs d'envoi
            echo 'Erreur lors de l\'envoi de l\'e-mail: ' . $e->getMessage();
        }
    }


    public function form(Adhesion $adhesion, $user = null, $membre = null): bool
    {
        $requestCompagnie = $adhesion->getEntreprise();
        $requetEmail = $adhesion->getEmail();
        $this->motDePasse  =  $this->generateRandomPassword();
        $requestPassword = $this->motDePasse;

	$listeEntreprise = [
	        "STRATEVENT&CO",
            "HIRÉ GOLD MINE",
            "BONIKRO GOLD MINE",
            "AGBAOU GOLD",
            "SOCIÉTÉ DES MINES D'ITY",
            "SOCIÉTÉ DES MINES DE DAAPLEU",
            "PERSEUS SISSINGUÉ SA",
            "PERSEUS YAOURÉ",
            "TONGON SA",
            "TIETTO MINERALS",
            "ROXGOLD SANGO (EX LGL RESOURCES)",
            "SHILOH MANGANÈSE ",
            "LAGUNE EXPLOITATION BONGOUANOU",
            "COMPAGNIE MINIÈRE DU BAFING",
            "COMPAGNIE MINIÈRE DU LITTORAL",
            "SOCIÉTÉ DES MINES DE FLOLEU (SMF)",
            "SOCIÉTÉ DES MINES DE LAFIGUÉ",
            "CORICA MINING",
            "EPC CI",
            "MAXAM CI",
            "MOTA ENGIL",
            "EPSA",
            "SAHARA MINING RESOURCES",
            "CAPITAL DRILLING",
            "ACML",
            "FORACO-CI (FOREMI)",
            "FORAMIN",
            "FORAGE AND DRILLING (FORADRILL)",
            "DESIMONE SA",
            "SISAG",
            "BARRICK RESOURCES CI",
            "SHARK MINING (MONTAGE)",
            "JOFEMA MINERAL RESOURCES",
            "NEW MINING",
            "LA MANCHA",
            "ETRUSCAN",
            "TURACO GOLD",
            "CENTAMIN/AMPELLA MINING CI",
            "RICCA RESOURCES",
            "SAMA NICKEL",
            "OCCIDENTAL GOLD",
            "LAGUNE EXPLORATION AFRIQUE (LEA)",
            "KOULOU GOLD CORP. (KENORLAND MINERALS)",
            "ATEX MINING RESOURCES",
            "AFRIQUE GOLD EXPLORATION",
            "B2GOLD",
            "NF CONSULT",
            "PERSEUS SERVICES SARL",
            "ENVIPUR SA",
            "SOLEVO GROUP",
            "SIC-CI",
            "SMT CI",
            "FLUICONNECTO (HYSPEC CI)",
            "ICM HOLDING",
            "OPTIMUM INTERNATIONAL",
            "MOVIS CI",
            "JCW",
            "COMPAGNIE DE TRANSIT ET DE LOGISTIQUE MINIÈRE",
            "FORAVIE",
            "FER IVOIRE",
            "G4S",
            "LASSIRE DÉCHETS SERVICES",
            "I.C.E SARL",
            "SPCA KSK-AVOCATS",
            "ERNEST & YOUNG (EY)",
            "MINING SERVICES AND CONSULTING",
            "JESA GROUP",
            "IMPERIUM SERVICES",
            "MINING AND CIVIL SERVICES",
            "SAMA BTP",
            "X & M SUPPLIERS",
            "SOCIETES DES ACIERIES DE COTE D'IVOIRE",
            "SOJUFISC COTE D'IVOIRE",
            "911SECURITY",
            "VIVO ENERGY CÔTE D'IVOIRE",
            "SAFE PARTNERS",
            "YEBED SUPPLIERS CÔTE D'IVOIRE",
            "CORLAY CÔTE D'IVOIRE",
            "KONIS LOGISTIC"
        ];

        if(in_array($adhesion->getEntreprise(),$listeEntreprise)){
            $requestParticipation = "2000000";
        }else{
            $requestParticipation = "2500000";
        }

        // Recherche de la compagnie
        $compagnie = $this->compagnieRepository->findOneBy(['titre' => $requestCompagnie]);
        if (!$compagnie) {
            return false;
        }

        // Enregistrement de l'user
        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy(['email' => $requetEmail]);

        if (!$user) {
            $user = new User();
        }

        $user->setEmail($requetEmail);
        $user->setPassword($this->passwordHasher->hashPassword($user, $requestPassword));
        $user->setRoles(['ROLE_USER']);
        $this->entityManager->persist($user);

        $membre = $this->entityManager
            ->getRepository(Membre::class)
            ->findOneBy(['user' => $user]);
        // Enregistrement du membre
        if (!$membre) {
            $membre = new Membre();
        }
        $membre->setCompagnie($compagnie);
        $membre->setUser($user);
        $membre->setParticipation((int) $requestParticipation);

        $this->entityManager->persist($membre);
        $this->entityManager->flush();

        return true;
    }

    public function generateRandomPassword($length = 12)
    {
        return substr(bin2hex(random_bytes($length)), 0, $length);
    }
}
