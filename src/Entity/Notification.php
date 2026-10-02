<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::JSON)]
    private array $readBy = [];

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int { return $this->id; }

    public function getTitle(): ?string { return $this->title; }
    public function setTitle(?string $title): static { $this->title = $title; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(?string $message): static { $this->message = $message; return $this; }

    public function getCreatedAt(): ?\DateTimeInterface { return $this->createdAt; }
    public function setCreatedAt(?\DateTimeInterface $createdAt): static { $this->createdAt = $createdAt; return $this; }

    public function getReadBy(): array { return $this->readBy; }
    public function setReadBy(array $readBy): static { $this->readBy = $readBy; return $this; }

    public function isReadBy(int $userId): bool
    {
        return in_array($userId, $this->readBy);
    }

    public function markReadBy(int $userId): static
    {
        if (!in_array($userId, $this->readBy)) {
            $this->readBy[] = $userId;
        }
        return $this;
    }
}