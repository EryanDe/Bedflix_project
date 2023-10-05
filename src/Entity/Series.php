<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $description_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $affiche_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_serie = null;

    #[ORM\OneToMany(mappedBy: 'id_serie', targetEntity: SeriesCategories::class)]
    private Collection $seriesCategories;

    #[ORM\OneToMany(mappedBy: 'id_serie', targetEntity: UserSeries::class)]
    private Collection $userSeries;

    public function __construct()
    {
        $this->seriesCategories = new ArrayCollection();
        $this->userSeries = new ArrayCollection();
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
            $seriesCategory->setIdSerie($this);
        }

        return $this;
    }

    public function removeSeriesCategory(SeriesCategories $seriesCategory): static
    {
        if ($this->seriesCategories->removeElement($seriesCategory)) {
            // set the owning side to null (unless already changed)
            if ($seriesCategory->getIdSerie() === $this) {
                $seriesCategory->setIdSerie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserSeries>
     */
    public function getUserSeries(): Collection
    {
        return $this->userSeries;
    }

    public function addUserSeries(UserSeries $userSeries): static
    {
        if (!$this->userSeries->contains($userSeries)) {
            $this->userSeries->add($userSeries);
            $userSeries->setIdSerie($this);
        }

        return $this;
    }

    public function removeUserSeries(UserSeries $userSeries): static
    {
        if ($this->userSeries->removeElement($userSeries)) {
            // set the owning side to null (unless already changed)
            if ($userSeries->getIdSerie() === $this) {
                $userSeries->setIdSerie(null);
            }
        }

        return $this;
    }
}
