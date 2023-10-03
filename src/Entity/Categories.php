<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:'categorie_id')]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $libelle_categorie = null;

    #[ORM\ManyToMany(targetEntity: Films::class, mappedBy: 'categorie')]
    private Collection $film;

    #[ORM\ManyToMany(targetEntity: Series::class, mappedBy: 'categorie')]
    private Collection $serie;

    public function __construct()
    {
        $this->film = new ArrayCollection();
        $this->serie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->libelle_categorie;
    }

    public function setLibelleCategorie(string $libelle_categorie): static
    {
        $this->libelle_categorie = $libelle_categorie;

        return $this;
    }

    /**
     * @return Collection<int, Films>
     */
    public function getFilm(): Collection
    {
        return $this->film;
    }

    public function addFilm(Films $film): static
    {
        if (!$this->film->contains($film)) {
            $this->film->add($film);
            $film->addCategorie($this);
        }

        return $this;
    }

    public function removeFilm(Films $film): static
    {
        if ($this->film->removeElement($film)) {
            $film->removeCategorie($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Series>
     */
    public function getSerie(): Collection
    {
        return $this->serie;
    }

    public function addSerie(Series $serie): static
    {
        if (!$this->serie->contains($serie)) {
            $this->serie->add($serie);
            $serie->addCategorie($this);
        }

        return $this;
    }

    public function removeSerie(Series $serie): static
    {
        if ($this->serie->removeElement($serie)) {
            $serie->removeCategorie($this);
        }

        return $this;
    }
}
