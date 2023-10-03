<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_serie = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_serie = null;

    #[ORM\Column(length: 50)]
    private ?string $affiche_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_serie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSerie(): ?string
    {
        return $this->titre_serie;
    }

    public function setTitreSerie(string $titre_serie): static
    {
        $this->titre_serie = $titre_serie;

        return $this;
    }

    public function getDescriptionSerie(): ?string
    {
        return $this->description_serie;
    }

    public function setDescriptionSerie(string $description_serie): static
    {
        $this->description_serie = $description_serie;

        return $this;
    }

    public function getAfficheSerie(): ?string
    {
        return $this->affiche_serie;
    }

    public function setAfficheSerie(string $affiche_serie): static
    {
        $this->affiche_serie = $affiche_serie;

        return $this;
    }

    public function getLienSerie(): ?string
    {
        return $this->lien_serie;
    }

    public function setLienSerie(string $lien_serie): static
    {
        $this->lien_serie = $lien_serie;

        return $this;
    }
}
