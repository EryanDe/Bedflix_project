<?php

namespace App\Entity;

use App\Repository\EpisodesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodesRepository::class)]
class Episodes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'episode_id')]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero_episode = null;

    #[ORM\Column(length: 25)]
    private ?string $titre_episode = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $duree_episode = null;

    #[ORM\ManyToOne(inversedBy: 'episode')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Saisons $saison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroEpisode(): ?int
    {
        return $this->numero_episode;
    }

    public function setNumeroEpisode(int $numero_episode): static
    {
        $this->numero_episode = $numero_episode;

        return $this;
    }

    public function getTitreEpisode(): ?string
    {
        return $this->titre_episode;
    }

    public function setTitreEpisode(string $titre_episode): static
    {
        $this->titre_episode = $titre_episode;

        return $this;
    }

    public function getDureeEpisode(): ?string
    {
        return $this->duree_episode;
    }

    public function setDureeEpisode(string $duree_episode): static
    {
        $this->duree_episode = $duree_episode;

        return $this;
    }

    public function getSaison(): ?Saisons
    {
        return $this->saison;
    }

    public function setSaison(?Saisons $saison): static
    {
        $this->saison = $saison;

        return $this;
    }
}
