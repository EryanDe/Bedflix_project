<?php

namespace App\Entity;

use App\Repository\FilmsCategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmsCategoriesRepository::class)]
class FilmsCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'filmsCategories')]
    private ?Films $id_film = null;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'filmsCategories')]
    private Collection $id_category;

    public function __construct()
    {
        $this->id_category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFilm(): ?Films
    {
        return $this->id_film;
    }

    public function setIdFilm(?Films $id_film): static
    {
        $this->id_film = $id_film;

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getIdCategory(): Collection
    {
        return $this->id_category;
    }

    public function addIdCategory(Categories $idCategory): static
    {
        if (!$this->id_category->contains($idCategory)) {
            $this->id_category->add($idCategory);
        }

        return $this;
    }

    public function removeIdCategory(Categories $idCategory): static
    {
        $this->id_category->removeElement($idCategory);

        return $this;
    }
}
