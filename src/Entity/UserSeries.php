<?php

namespace App\Entity;

use App\Repository\UserSeriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserSeriesRepository::class)]
class UserSeries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'userSeries')]
    private ?User $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'userSeries')]
    private ?Series $id_serie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
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
}
