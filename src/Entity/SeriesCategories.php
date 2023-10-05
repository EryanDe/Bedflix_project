<?php

namespace App\Entity;

use App\Repository\SeriesCategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesCategoriesRepository::class)]
class SeriesCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seriesCategories')]
    private ?Series $id_serie = null;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'seriesCategories')]
    private Collection $id_categorie;

    public function __construct()
    {
        $this->id_categorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSerie(): ?Series
    {
        return $this->id_serie;
    }

    public function setIdSerie(?Series $id_serie): static
    {
        $this->id_serie = $id_serie;

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getIdCategorie(): Collection
    {
        return $this->id_categorie;
    }

    public function addIdCategorie(Categories $idCategorie): static
    {
        if (!$this->id_categorie->contains($idCategorie)) {
            $this->id_categorie->add($idCategorie);
        }

        return $this;
    }

    public function removeIdCategorie(Categories $idCategorie): static
    {
        $this->id_categorie->removeElement($idCategorie);

        return $this;
    }
}
