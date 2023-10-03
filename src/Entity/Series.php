<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'serie_id')]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_serie = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_serie = null;

    #[ORM\Column(length: 50)]
    private ?string $affiche_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_serie = null;

    #[ORM\ManyToMany(targetEntity: Utilisateurs::class, mappedBy: 'serie')]
    private Collection $utilisateur;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'serie')]
    private Collection $categorie;

    #[ORM\OneToMany(mappedBy: 'serie', targetEntity: Saisons::class)]
    private Collection $saison;

    public function __construct()
    {
        $this->utilisateur = new ArrayCollection();
        $this->categorie = new ArrayCollection();
        $this->saison = new ArrayCollection();
    }

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
            $utilisateur->addSerie($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateurs $utilisateur): static
    {
        if ($this->utilisateur->removeElement($utilisateur)) {
            $utilisateur->removeSerie($this);
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

    /**
     * @return Collection<int, Saisons>
     */
    public function getSaison(): Collection
    {
        return $this->saison;
    }

    public function addSaison(Saisons $saison): static
    {
        if (!$this->saison->contains($saison)) {
            $this->saison->add($saison);
            $saison->setSerie($this);
        }

        return $this;
    }

    public function removeSaison(Saisons $saison): static
    {
        if ($this->saison->removeElement($saison)) {
            // set the owning side to null (unless already changed)
            if ($saison->getSerie() === $this) {
                $saison->setSerie(null);
            }
        }

        return $this;
    }
}
