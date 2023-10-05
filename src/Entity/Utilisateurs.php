<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Utilisateurs implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'utilisateur_id')]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true, name:'utilisateur_email')]
    private ?string $email = null;

    #[ORM\Column(name:'utilisateur_role')]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(name:'utilisateur_mot_de_passe')]
    private ?string $password = null;

    #[ORM\Column(length: 25)]
    private ?string $nom_utilisateur = null;

    #[ORM\Column(length: 25)]
    private ?string $prenom_utilisateur = null;

    #[ORM\Column(length: 25)]
    private ?string $pseudo_utilisateur = null;

    #[ORM\Column(length: 100)]
    private ?string $photo_profil_utilisateur = null;

    #[ORM\ManyToMany(targetEntity: Films::class, inversedBy: 'utilisateur')]
    private Collection $film;

    #[ORM\ManyToMany(targetEntity: Series::class, inversedBy: 'utilisateur')]
    private Collection $serie;

    public function __construct()
    {
        $this->film = new ArrayCollection();
        $this->serie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
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

    public function setRoles(array $roles): static
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

    public function setPassword(string $password): static
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

    public function setNomUtilisateur(string $nom_utilisateur): static
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur(string $prenom_utilisateur): static
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    public function getPseudoUtilisateur(): ?string
    {
        return $this->pseudo_utilisateur;
    }

    public function setPseudoUtilisateur(string $pseudo_utilisateur): static
    {
        $this->pseudo_utilisateur = $pseudo_utilisateur;

        return $this;
    }

    public function getPhotoProfilUtilisateur(): ?string
    {
        return $this->photo_profil_utilisateur;
    }

    public function setPhotoProfilUtilisateur(string $photo_profil_utilisateur): static
    {
        $this->photo_profil_utilisateur = $photo_profil_utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, Films>
     */
    public function getFilm(): Collection
    {
        return $this->film;
    }

    public function addFilm(Films $film): static
    {
        if (!$this->film->contains($film)) {
            $this->film->add($film);
        }

        return $this;
    }

    public function removeFilm(Films $film): static
    {
        $this->film->removeElement($film);

        return $this;
    }

    /**
     * @return Collection<int, series>
     */
    public function getSerie(): Collection
    {
        return $this->serie;
    }

    public function addSerie(series $serie): static
    {
        if (!$this->serie->contains($serie)) {
            $this->serie->add($serie);
        }

        return $this;
    }

    public function removeSerie(series $serie): static
    {
        $this->serie->removeElement($serie);

        return $this;
    }
}
