<?php

namespace App\Entity;

use App\Repository\FilmsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmsRepository::class)]
class Films
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $titre_film = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description_film = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $affiche_film = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_film = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $duree_film = null;

    #[ORM\OneToMany(mappedBy: 'id_film', targetEntity: UserFilms::class)]
    private Collection $userFilms;

    #[ORM\OneToMany(mappedBy: 'id_film', targetEntity: FilmsCategories::class)]
    private Collection $filmsCategories;

    public function __construct()
    {
        $this->userFilms = new ArrayCollection();
        $this->filmsCategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreFilm(): ?string
    {
        return $this->titre_film;
    }

    public function setTitreFilm(?string $titre_film): static
    {
        $this->titre_film = $titre_film;

        return $this;
    }

    public function getDescriptionFilm(): ?string
    {
        return $this->description_film;
    }

    public function setDescriptionFilm(?string $description_film): static
    {
        $this->description_film = $description_film;

        return $this;
    }

    public function getAfficheFilm(): ?string
    {
        return $this->affiche_film;
    }

    public function setAfficheFilm(?string $affiche_film): static
    {
        $this->affiche_film = $affiche_film;

        return $this;
    }

    public function getLienFilm(): ?string
    {
        return $this->lien_film;
    }

    public function setLienFilm(?string $lien_film): static
    {
        $this->lien_film = $lien_film;

        return $this;
    }

    public function getDureeFilm(): ?string
    {
        return $this->duree_film;
    }

    public function setDureeFilm(?string $duree_film): static
    {
        $this->duree_film = $duree_film;

        return $this;
    }

    /**
     * @return Collection<int, UserFilms>
     */
    public function getUserFilms(): Collection
    {
        return $this->userFilms;
    }

    public function addUserFilm(UserFilms $userFilm): static
    {
        if (!$this->userFilms->contains($userFilm)) {
            $this->userFilms->add($userFilm);
            $userFilm->setIdFilm($this);
        }

        return $this;
    }

    public function removeUserFilm(UserFilms $userFilm): static
    {
        if ($this->userFilms->removeElement($userFilm)) {
            // set the owning side to null (unless already changed)
            if ($userFilm->getIdFilm() === $this) {
                $userFilm->setIdFilm(null);
            }
        }

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
            $filmsCategory->setIdFilm($this);
        }

        return $this;
    }

    public function removeFilmsCategory(FilmsCategories $filmsCategory): static
    {
        if ($this->filmsCategories->removeElement($filmsCategory)) {
            // set the owning side to null (unless already changed)
            if ($filmsCategory->getIdFilm() === $this) {
                $filmsCategory->setIdFilm(null);
            }
        }

        return $this;
    }
}
