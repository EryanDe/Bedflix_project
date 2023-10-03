<?php

namespace App\Entity;

use App\Repository\SaisonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaisonsRepository::class)]
class Saisons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'saison_id')]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero_saison = null;

    #[ORM\Column(length: 25)]
    private ?string $titre_saison = null;

    #[ORM\ManyToOne(inversedBy: 'saison')]
    private ?Series $serie = null;

    #[ORM\OneToMany(mappedBy: 'saison', targetEntity: Episodes::class)]
    private Collection $episode;

    public function __construct()
    {
        $this->episode = new ArrayCollection();
    }

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

    public function getSerie(): ?Series
    {
        return $this->serie;
    }

    public function setSerie(?Series $serie): static
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * @return Collection<int, Episodes>
     */
    public function getEpisode(): Collection
    {
        return $this->episode;
    }

    public function addEpisode(Episodes $episode): static
    {
        if (!$this->episode->contains($episode)) {
            $this->episode->add($episode);
            $episode->setSaison($this);
        }

        return $this;
    }

    public function removeEpisode(Episodes $episode): static
    {
        if ($this->episode->removeElement($episode)) {
            // set the owning side to null (unless already changed)
            if ($episode->getSaison() === $this) {
                $episode->setSaison(null);
            }
        }

        return $this;
    }
}
