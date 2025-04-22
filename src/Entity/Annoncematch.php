<?php

namespace App\Entity;

use App\Repository\AnnonceMatchRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Demande;

#[ORM\Entity(repositoryClass: AnnonceMatchRepository::class)]
#[ORM\Table(name: 'annoncematch')]
class AnnonceMatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'annonce_id')]
    private ?int $annonceId = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[Assert\Length(
        min: 5,
        max: 25,
        minMessage: "Le titre doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $titre = null;

    #[ORM\Column(name: 'date_heure', type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "Format de date invalide.")]
    #[Assert\GreaterThan("now", message: "La date doit être dans le futur.")]
    private ?\DateTimeInterface $dateHeure = null;

    #[ORM\Column(length: 25, nullable: true)]
    #[Assert\Length(
        max: 25,
        maxMessage: "Le lieu ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $lieu = null;

    #[ORM\Column(name: 'joueurs_recherches')]
    #[Assert\NotNull(message: "Le nombre de joueurs est obligatoire.")]
    #[Assert\Positive(message: "Le nombre de joueurs doit être supérieur à 0.")]
    private ?int $joueursRecherches = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: "Le niveau est obligatoire.")]
    #[Assert\Length(
        max: 25,
        maxMessage: "Le niveau ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $niveau = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'annonces')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true)]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'annonce', targetEntity: Demande::class, orphanRemoval: true)]
    private Collection $demandes;

    public function __construct()
    {
        $this->demandes = new ArrayCollection();
    }

    public function getAnnonceId(): ?int
    {
        return $this->annonceId;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->dateHeure;
    }

    public function setDateHeure(\DateTimeInterface $dateHeure): static
    {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getJoueursRecherches(): ?int
    {
        return $this->joueursRecherches;
    }

    public function setJoueursRecherches(int $joueursRecherches): static
    {
        $this->joueursRecherches = $joueursRecherches;
        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getDemandes(): Collection
    {
        return $this->demandes;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demandes->contains($demande)) {
            $this->demandes->add($demande);
            $demande->setAnnonce($this);
        }
        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demandes->removeElement($demande)) {
            if ($demande->getAnnonce() === $this) {
                $demande->setAnnonce(null);
            }
        }
        return $this;
    }
}
