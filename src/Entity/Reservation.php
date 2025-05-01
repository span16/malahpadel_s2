<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reservation
{
    public const TYPES = [
        'simple', 
        'duo', 
        'groupe', 
        'vip', 
        'tournoi', 
        'location', 
        'coach'
    ];

    public const STATUSES = [
        'en_attente',
        'payé',
        'annulé',
        'confirmé',
        'refusé'
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_R", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Vous devez sélectionner un événement")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Le nom de l'événement doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom de l'événement ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $nom = null;

    #[ORM\Column(name: "type_reservation", length: 255)]
    #[Assert\NotBlank(message: "Le type de réservation est obligatoire")]
    #[Assert\Choice(
        choices: self::TYPES,
        message: "Type de réservation invalide. Choisissez parmi : {{ choices }}"
    )]
    private ?string $typeReservation = null;

    #[ORM\Column(name: "nombre_places")]
    #[Assert\NotBlank(message: "Le nombre de places est obligatoire")]
    #[Assert\Type(
        type: "integer",
        message: "Le nombre de places doit être un nombre entier"
    )]
    #[Assert\Range(
        min: 1,
        max: 100,
        notInRangeMessage: "Le nombre de places doit être entre {{ min }} et {{ max }}"
    )]
    private ?int $nombrePlaces = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        min: 5,
        minMessage: "La remarque doit contenir au moins {{ limit }} caractères",
        max: 500,
        maxMessage: "La remarque ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $remarque = null;

    #[ORM\Column(name: "code_confirmation", unique: true)]
    private ?int $codeConfirmation = null;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank(message: "Le prix est obligatoire")]
    #[Assert\Type(
        type: "float",
        message: "Le prix doit être un nombre décimal"
    )]
    #[Assert\PositiveOrZero(message: "Le prix ne peut pas être négatif")]
    #[Assert\Range(
        min: 0,
        max: 1000,
        notInRangeMessage: "Le prix doit être compris entre {{ min }}€ et {{ max }}€"
    )]
    private float $prix = 50.0;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'en_attente'])]
    #[Assert\NotBlank(message: "Le statut est obligatoire")]
    #[Assert\Choice(
        choices: self::STATUSES,
        message: "Statut invalide. Choisissez parmi : {{ choices }}"
    )]
    private string $status = 'en_attente';

    #[ORM\PrePersist]
    public function generateConfirmationCode(): void
    {
        if ($this->codeConfirmation === null) {
            $this->codeConfirmation = random_int(100000, 999999);
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getTypeReservation(): ?string
    {
        return $this->typeReservation;
    }

    public function setTypeReservation(string $typeReservation): self
    {
        $this->typeReservation = $typeReservation;
        return $this;
    }

    public function getNombrePlaces(): ?int
    {
        return $this->nombrePlaces;
    }

    public function setNombrePlaces(int $nombrePlaces): self
    {
        $this->nombrePlaces = $nombrePlaces;
        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;
        return $this;
    }

    public function getCodeConfirmation(): ?int
    {
        return $this->codeConfirmation;
    }

    public function setCodeConfirmation(int $codeConfirmation): self
    {
        $this->codeConfirmation = $codeConfirmation;
        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            'Réservation #%s - %s (%s)',
            $this->id ?? 'Nouvelle',
            $this->nom ?? 'Aucun événement',
            $this->typeReservation ?? 'Aucun type'
        );
    }
}