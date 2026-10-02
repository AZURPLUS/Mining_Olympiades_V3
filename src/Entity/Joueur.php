<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur  implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenoms = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matricule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $licence = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $media = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\ManyToMany(targetEntity: Discipline::class, inversedBy: 'joueurs')]
    private Collection $discipline;

    #[ORM\ManyToOne(inversedBy: 'joueurs')]
    private ?Abonnement $abonnement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $carte = null;

    #[ORM\Column(length: 50, nullable: true, options: ['default' => 'pending'])]
    private ?string $status = 'pending';

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $rejectMessage = null;

    public function __construct()
    {
        $this->discipline = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(?string $prenoms): static
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getLicence(): ?string
    {
        return $this->licence;
    }

    public function setLicence(?string $licence): static
    {
        $this->licence = $licence;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(?string $media): static
    {
        $this->media = $media;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, Discipline>
     */
    public function getDiscipline(): Collection
    {
        return $this->discipline;
    }

    public function addDiscipline(Discipline $discipline): static
    {
        if (!$this->discipline->contains($discipline)) {
            $this->discipline->add($discipline);
        }

        return $this;
    }

    public function removeDiscipline(Discipline $discipline): static
    {
        $this->discipline->removeElement($discipline);

        return $this;
    }

    public function getAbonnement(): ?Abonnement
    {
        return $this->abonnement;
    }

    public function setAbonnement(?Abonnement $abonnement): static
    {
        $this->abonnement = $abonnement;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return  [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'matricule' => $this->matricule,
            'contact' => $this->contact,
            'licence' => $this->licence,
            'email' => $this->email,
            'media' => $this->media,
            'discipline' => $this->discipline
        ];
    }

    public function getCarte(): ?string
    {
        return $this->carte;
    }

public function setCarte(?string $carte): static
    {
        $this->carte = $carte;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getRejectMessage(): ?string
    {
        return $this->rejectMessage;
    }

    public function setRejectMessage(?string $rejectMessage): static
    {
        $this->rejectMessage = $rejectMessage;
        return $this;
    }
}
