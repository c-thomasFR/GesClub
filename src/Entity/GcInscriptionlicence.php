<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcInscriptionlicence
 *
 * @ORM\Table(name="GC_InscriptionLicence", uniqueConstraints={@ORM\UniqueConstraint(name="InscriptionLicence_ID", columns={"InscriptionLicence_ID"})})
 * @ORM\Entity
 */
class GcInscriptionlicence
{
    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionLicence_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inscriptionlicenceId;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionLicence_InscriptionID", type="integer", nullable=false)
     */
    private $inscriptionlicenceInscriptionid;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionLicence_LicenceID", type="integer", nullable=false)
     */
    private $inscriptionlicenceLicenceid;

    /**
     * @var string
     *
     * @ORM\Column(name="InscriptionLicence_Cotisation", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $inscriptionlicenceCotisation;

    public function getInscriptionlicenceId(): ?int
    {
        return $this->inscriptionlicenceId;
    }

    public function getInscriptionlicenceInscriptionid(): ?int
    {
        return $this->inscriptionlicenceInscriptionid;
    }

    public function setInscriptionlicenceInscriptionid(int $inscriptionlicenceInscriptionid): self
    {
        $this->inscriptionlicenceInscriptionid = $inscriptionlicenceInscriptionid;

        return $this;
    }

    public function getInscriptionlicenceLicenceid(): ?int
    {
        return $this->inscriptionlicenceLicenceid;
    }

    public function setInscriptionlicenceLicenceid(int $inscriptionlicenceLicenceid): self
    {
        $this->inscriptionlicenceLicenceid = $inscriptionlicenceLicenceid;

        return $this;
    }

    public function getInscriptionlicenceCotisation(): ?string
    {
        return $this->inscriptionlicenceCotisation;
    }

    public function setInscriptionlicenceCotisation(string $inscriptionlicenceCotisation): self
    {
        $this->inscriptionlicenceCotisation = $inscriptionlicenceCotisation;

        return $this;
    }


}
