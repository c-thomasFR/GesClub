<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcMembre
 *
 * @ORM\Table(name="GC_Membre", uniqueConstraints={@ORM\UniqueConstraint(name="Membre_ID", columns={"Membre_ID"})})
 * @ORM\Entity
 */
class GcMembre
{
    /**
     * @var int
     *
     * @ORM\Column(name="Membre_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $membreId;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Nom", type="text", length=65535, nullable=false)
     */
    private $membreNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Prenom", type="text", length=65535, nullable=false)
     */
    private $membrePrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Genre", type="string", length=0, nullable=false)
     */
    private $membreGenre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Membre_Naissance", type="date", nullable=false)
     */
    private $membreNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Adresse1", type="text", length=65535, nullable=false)
     */
    private $membreAdresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Adresse2", type="text", length=65535, nullable=false)
     */
    private $membreAdresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_CP", type="text", length=65535, nullable=false)
     */
    private $membreCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Ville", type="text", length=65535, nullable=false)
     */
    private $membreVille;

    /**
     * @var int
     *
     * @ORM\Column(name="Membre_PaysID", type="integer", nullable=false)
     */
    private $membrePaysid;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Telephone", type="text", length=65535, nullable=false)
     */
    private $membreTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Mail", type="text", length=65535, nullable=false)
     */
    private $membreMail;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Droit", type="string", length=0, nullable=false, options={"default"="C"})
     */
    private $membreDroit = 'C';

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Login", type="text", length=65535, nullable=false)
     */
    private $membreLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_MDP", type="text", length=65535, nullable=false)
     */
    private $membreMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Prof", type="string", length=0, nullable=false)
     */
    private $membreProf = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Membre_Photo", type="text", length=65535, nullable=false)
     */
    private $membrePhoto;

    public function getMembreId(): ?int
    {
        return $this->membreId;
    }

    public function getMembreNom(): ?string
    {
        return $this->membreNom;
    }

    public function setMembreNom(string $membreNom): self
    {
        $this->membreNom = $membreNom;

        return $this;
    }

    public function getMembrePrenom(): ?string
    {
        return $this->membrePrenom;
    }

    public function setMembrePrenom(string $membrePrenom): self
    {
        $this->membrePrenom = $membrePrenom;

        return $this;
    }

    public function getMembreGenre(): ?string
    {
        return $this->membreGenre;
    }

    public function setMembreGenre(string $membreGenre): self
    {
        $this->membreGenre = $membreGenre;

        return $this;
    }

    public function getMembreNaissance(): ?\DateTimeInterface
    {
        return $this->membreNaissance;
    }

    public function setMembreNaissance(\DateTimeInterface $membreNaissance): self
    {
        $this->membreNaissance = $membreNaissance;

        return $this;
    }

    public function getMembreAdresse1(): ?string
    {
        return $this->membreAdresse1;
    }

    public function setMembreAdresse1(string $membreAdresse1): self
    {
        $this->membreAdresse1 = $membreAdresse1;

        return $this;
    }

    public function getMembreAdresse2(): ?string
    {
        return $this->membreAdresse2;
    }

    public function setMembreAdresse2(string $membreAdresse2): self
    {
        $this->membreAdresse2 = $membreAdresse2;

        return $this;
    }

    public function getMembreCp(): ?string
    {
        return $this->membreCp;
    }

    public function setMembreCp(string $membreCp): self
    {
        $this->membreCp = $membreCp;

        return $this;
    }

    public function getMembreVille(): ?string
    {
        return $this->membreVille;
    }

    public function setMembreVille(string $membreVille): self
    {
        $this->membreVille = $membreVille;

        return $this;
    }

    public function getMembrePaysid(): ?int
    {
        return $this->membrePaysid;
    }

    public function setMembrePaysid(int $membrePaysid): self
    {
        $this->membrePaysid = $membrePaysid;

        return $this;
    }

    public function getMembreTelephone(): ?string
    {
        return $this->membreTelephone;
    }

    public function setMembreTelephone(string $membreTelephone): self
    {
        $this->membreTelephone = $membreTelephone;

        return $this;
    }

    public function getMembreMail(): ?string
    {
        return $this->membreMail;
    }

    public function setMembreMail(string $membreMail): self
    {
        $this->membreMail = $membreMail;

        return $this;
    }

    public function getMembreDroit(): ?string
    {
        return $this->membreDroit;
    }

    public function setMembreDroit(string $membreDroit): self
    {
        $this->membreDroit = $membreDroit;

        return $this;
    }

    public function getMembreLogin(): ?string
    {
        return $this->membreLogin;
    }

    public function setMembreLogin(string $membreLogin): self
    {
        $this->membreLogin = $membreLogin;

        return $this;
    }

    public function getMembreMdp(): ?string
    {
        return $this->membreMdp;
    }

    public function setMembreMdp(string $membreMdp): self
    {
        $this->membreMdp = $membreMdp;

        return $this;
    }

    public function getMembreProf(): ?string
    {
        return $this->membreProf;
    }

    public function setMembreProf(string $membreProf): self
    {
        $this->membreProf = $membreProf;

        return $this;
    }

    public function getMembrePhoto(): ?string
    {
        return $this->membrePhoto;
    }

    public function setMembrePhoto(string $membrePhoto): self
    {
        $this->membrePhoto = $membrePhoto;

        return $this;
    }


}
