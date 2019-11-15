<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcInscriptioncours
 *
 * @ORM\Table(name="GC_InscriptionCours", uniqueConstraints={@ORM\UniqueConstraint(name="InscriptionCours_ID", columns={"InscriptionCours_ID"})})
 * @ORM\Entity
 */
class GcInscriptioncours
{
    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionCours_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inscriptioncoursId;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionCours_InscriptionID", type="integer", nullable=false)
     */
    private $inscriptioncoursInscriptionid;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionCours_CoursID", type="integer", nullable=false)
     */
    private $inscriptioncoursCoursid;

    /**
     * @var string
     *
     * @ORM\Column(name="InscriptionCours_Cotisation", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $inscriptioncoursCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="InscriptionCours_Primaire", type="string", length=0, nullable=false)
     */
    private $inscriptioncoursPrimaire = '0';

    public function getInscriptioncoursId(): ?int
    {
        return $this->inscriptioncoursId;
    }

    public function getInscriptioncoursInscriptionid(): ?int
    {
        return $this->inscriptioncoursInscriptionid;
    }

    public function setInscriptioncoursInscriptionid(int $inscriptioncoursInscriptionid): self
    {
        $this->inscriptioncoursInscriptionid = $inscriptioncoursInscriptionid;

        return $this;
    }

    public function getInscriptioncoursCoursid(): ?int
    {
        return $this->inscriptioncoursCoursid;
    }

    public function setInscriptioncoursCoursid(int $inscriptioncoursCoursid): self
    {
        $this->inscriptioncoursCoursid = $inscriptioncoursCoursid;

        return $this;
    }

    public function getInscriptioncoursCotisation(): ?string
    {
        return $this->inscriptioncoursCotisation;
    }

    public function setInscriptioncoursCotisation(string $inscriptioncoursCotisation): self
    {
        $this->inscriptioncoursCotisation = $inscriptioncoursCotisation;

        return $this;
    }

    public function getInscriptioncoursPrimaire(): ?string
    {
        return $this->inscriptioncoursPrimaire;
    }

    public function setInscriptioncoursPrimaire(string $inscriptioncoursPrimaire): self
    {
        $this->inscriptioncoursPrimaire = $inscriptioncoursPrimaire;

        return $this;
    }


}
