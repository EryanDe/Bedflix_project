<?php

namespace App\Entity;

use App\Repository\SaisonsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaisonsRepository::class)]
class Saisons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero_saison = null;

    #[ORM\Column(length: 25)]
    private ?string $titre_saison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroSaison(): ?int
    {
        return $this->numero_saison;
    }

    public function setNumeroSaison(int $numero_saison): static
    {
        $this->numero_saison = $numero_saison;

        return $this;
    }

    public function getTitreSaison(): ?string
    {
        return $this->titre_saison;
    }

    public function setTitreSaison(string $titre_saison): static
    {
        $this->titre_saison = $titre_saison;

        return $this;
    }
}
