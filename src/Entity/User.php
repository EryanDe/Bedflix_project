<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $nom_utilisateur = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $prenom_utilisateur = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $pseudo_utilisateur = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $photo_profil_utilisateur = null;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: UserFilms::class)]
    private Collection $userFilms;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: UserSeries::class)]
    private Collection $userSeries;

    public function __construct()
    {
        $this->userFilms = new ArrayCollection();
        $this->userSeries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(?string $nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur(?string $prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    public function getPseudoUtilisateur(): ?string
    {
        return $this->pseudo_utilisateur;
    }

    public function setPseudoUtilisateur(?string $pseudo_utilisateur)
    {
        $this->pseudo_utilisateur = $pseudo_utilisateur;

        return $this;
    }

    public function getPhotoProfilUtilisateur(): ?string
    {
        return $this->photo_profil_utilisateur;
    }

    public function setPhotoProfilUtilisateur(?string $photo_profil_utilisateur)
    {
        $this->photo_profil_utilisateur = $photo_profil_utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, UserFilms>
     */
    public function getUserFilms(): Collection
    {
        return $this->userFilms;
    }

    public function addUserFilm(UserFilms $userFilm)
    {
        if (!$this->userFilms->contains($userFilm)) {
            $this->userFilms->add($userFilm);
            $userFilm->setIdUser($this);
        }

        return $this;
    }

    public function removeUserFilm(UserFilms $userFilm)
    {
        if ($this->userFilms->removeElement($userFilm)) {
            // set the owning side to null (unless already changed)
            if ($userFilm->getIdUser() === $this) {
                $userFilm->setIdUser(null);
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

    public function addUserSeries(UserSeries $userSeries)
    {
        if (!$this->userSeries->contains($userSeries)) {
            $this->userSeries->add($userSeries);
            $userSeries->setIdUser($this);
        }

        return $this;
    }

    public function removeUserSeries(UserSeries $userSeries)
    {
        if ($this->userSeries->removeElement($userSeries)) {
            // set the owning side to null (unless already changed)
            if ($userSeries->getIdUser() === $this) {
                $userSeries->setIdUser(null);
            }
        }

        return $this;
    }
}
