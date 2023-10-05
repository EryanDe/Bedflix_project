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
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle_categorie = null;

    #[ORM\ManyToMany(targetEntity: FilmsCategories::class, mappedBy: 'id_category')]
    private Collection $filmsCategories;

    #[ORM\ManyToMany(targetEntity: SeriesCategories::class, mappedBy: 'id_categorie')]
    private Collection $seriesCategories;

    public function __construct()
    {
        $this->filmsCategories = new ArrayCollection();
        $this->seriesCategories = new ArrayCollection();
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
     * @return Collection<int, FilmsCategories>
     */
    public function getFilmsCategories(): Collection
    {
        return $this->filmsCategories;
    }

    public function addFilmsCategory(FilmsCategories $filmsCategory): static
    {
        if (!$this->filmsCategories->contains($filmsCategory)) {
            $this->filmsCategories->add($filmsCategory);
            $filmsCategory->addIdCategory($this);
        }

        return $this;
    }

    public function removeFilmsCategory(FilmsCategories $filmsCategory): static
    {
        if ($this->filmsCategories->removeElement($filmsCategory)) {
            $filmsCategory->removeIdCategory($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, SeriesCategories>
     */
    public function getSeriesCategories(): Collection
    {
        return $this->seriesCategories;
    }

    public function addSeriesCategory(SeriesCategories $seriesCategory): static
    {
        if (!$this->seriesCategories->contains($seriesCategory)) {
            $this->seriesCategories->add($seriesCategory);
            $seriesCategory->addIdCategorie($this);
        }

        return $this;
    }

    public function removeSeriesCategory(SeriesCategories $seriesCategory): static
    {
        if ($this->seriesCategories->removeElement($seriesCategory)) {
            $seriesCategory->removeIdCategorie($this);
        }

        return $this;
    }
}
