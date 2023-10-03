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
    #[ORM\Column(name:'film_id')]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_film = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_film = null;

    #[ORM\Column(length: 50)]
    private ?string $affiche_film = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_film = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $duree_film = null;

    #[ORM\ManyToMany(targetEntity: Utilisateurs::class, mappedBy: 'film')]
    private Collection $utilisateur;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'film')]
    private Collection $categorie;

    public function __construct()
    {
        $this->utilisateur = new ArrayCollection();
        $this->categorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreFilm(): ?string
    {
        return $this->titre_film;
    }

    public function setTitreFilm(string $titre_film): static
    {
        $this->titre_film = $titre_film;

        return $this;
    }

    public function getDescriptionFilm(): ?string
    {
        return $this->description_film;
    }

    public function setDescriptionFilm(string $description_film): static
    {
        $this->description_film = $description_film;

        return $this;
    }

    public function getAfficheFilm(): ?string
    {
        return $this->affiche_film;
    }

    public function setAfficheFilm(string $affiche_film): static
    {
        $this->affiche_film = $affiche_film;

        return $this;
    }

    public function getLienFilm(): ?string
    {
        return $this->lien_film;
    }

    public function setLienFilm(string $lien_film): static
    {
        $this->lien_film = $lien_film;

        return $this;
    }

    public function getDureeFilm(): ?string
    {
        return $this->duree_film;
    }

    public function setDureeFilm(string $duree_film): static
    {
        $this->duree_film = $duree_film;

        return $this;
    }

    /**
     * @return Collection<int, Utilisateurs>
     */
    public function getUtilisateur(): Collection
    {
        return $this->utilisateur;
    }

    public function addUtilisateur(Utilisateurs $utilisateur): static
    {
        if (!$this->utilisateur->contains($utilisateur)) {
            $this->utilisateur->add($utilisateur);
            $utilisateur->addFilm($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateurs $utilisateur): static
    {
        if ($this->utilisateur->removeElement($utilisateur)) {
            $utilisateur->removeFilm($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categories $categorie): static
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(Categories $categorie): static
    {
        $this->categorie->removeElement($categorie);

        return $this;
    }
}
