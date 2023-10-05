<?php

namespace App\Entity;

use App\Repository\UserFilmsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserFilmsRepository::class)]
class UserFilms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'userFilms')]
    private ?User $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'userFilms')]
    private ?Films $id_film = null;

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

    public function getIdFilm(): ?Films
    {
        return $this->id_film;
    }

    public function setIdFilm(?Films $id_film): static
    {
        $this->id_film = $id_film;

        return $this;
    }
}
