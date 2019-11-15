<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCours
 *
 * @ORM\Table(name="GC_Cours", uniqueConstraints={@ORM\UniqueConstraint(name="Cours_ID", columns={"Cours_ID"})})
 * @ORM\Entity
 */
class GcCours
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cours_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coursId;

    /**
     * @var int
     *
     * @ORM\Column(name="Cours_SaisonID", type="integer", nullable=false)
     */
    private $coursSaisonid;

    /**
     * @var int
     *
     * @ORM\Column(name="Cours_ClubID", type="integer", nullable=false)
     */
    private $coursClubid;

    /**
     * @var int
     *
     * @ORM\Column(name="Cours_SalleID", type="integer", nullable=false)
     */
    private $coursSalleid;

    /**
     * @var string
     *
     * @ORM\Column(name="Cours_Nom", type="text", length=65535, nullable=false)
     */
    private $coursNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Cours_Tarif", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $coursTarif;

    /**
     * @var int
     *
     * @ORM\Column(name="Cours_Jour", type="integer", nullable=false)
     */
    private $coursJour;

    /**
     * @var string
     *
     * @ORM\Column(name="Cours_HoraireDebut", type="text", length=65535, nullable=false)
     */
    private $coursHorairedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Cours_Duree", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $coursDuree;

    public function getCoursId(): ?int
    {
        return $this->coursId;
    }

    public function getCoursSaisonid(): ?int
    {
        return $this->coursSaisonid;
    }

    public function setCoursSaisonid(int $coursSaisonid): self
    {
        $this->coursSaisonid = $coursSaisonid;

        return $this;
    }

    public function getCoursClubid(): ?int
    {
        return $this->coursClubid;
    }

    public function setCoursClubid(int $coursClubid): self
    {
        $this->coursClubid = $coursClubid;

        return $this;
    }

    public function getCoursSalleid(): ?int
    {
        return $this->coursSalleid;
    }

    public function setCoursSalleid(int $coursSalleid): self
    {
        $this->coursSalleid = $coursSalleid;

        return $this;
    }

    public function getCoursNom(): ?string
    {
        return $this->coursNom;
    }

    public function setCoursNom(string $coursNom): self
    {
        $this->coursNom = $coursNom;

        return $this;
    }

    public function getCoursTarif(): ?string
    {
        return $this->coursTarif;
    }

    public function setCoursTarif(string $coursTarif): self
    {
        $this->coursTarif = $coursTarif;

        return $this;
    }

    public function getCoursJour(): ?int
    {
        return $this->coursJour;
    }

    public function setCoursJour(int $coursJour): self
    {
        $this->coursJour = $coursJour;

        return $this;
    }

    public function getCoursHorairedebut(): ?string
    {
        return $this->coursHorairedebut;
    }

    public function setCoursHorairedebut(string $coursHorairedebut): self
    {
        $this->coursHorairedebut = $coursHorairedebut;

        return $this;
    }

    public function getCoursDuree(): ?string
    {
        return $this->coursDuree;
    }

    public function setCoursDuree(string $coursDuree): self
    {
        $this->coursDuree = $coursDuree;

        return $this;
    }


}
