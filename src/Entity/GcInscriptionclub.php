<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcInscriptionclub
 *
 * @ORM\Table(name="GC_InscriptionClub", uniqueConstraints={@ORM\UniqueConstraint(name="InscriptionClub_ID", columns={"InscriptionClub_ID"})})
 * @ORM\Entity
 */
class GcInscriptionclub
{
    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionClub_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inscriptionclubId;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionClub_InscriptionID", type="integer", nullable=false)
     */
    private $inscriptionclubInscriptionid;

    /**
     * @var int
     *
     * @ORM\Column(name="InscriptionClub_ClubID", type="integer", nullable=false)
     */
    private $inscriptionclubClubid;

    /**
     * @var string
     *
     * @ORM\Column(name="InscriptionClub_Cotisation", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $inscriptionclubCotisation;

    public function getInscriptionclubId(): ?int
    {
        return $this->inscriptionclubId;
    }

    public function getInscriptionclubInscriptionid(): ?int
    {
        return $this->inscriptionclubInscriptionid;
    }

    public function setInscriptionclubInscriptionid(int $inscriptionclubInscriptionid): self
    {
        $this->inscriptionclubInscriptionid = $inscriptionclubInscriptionid;

        return $this;
    }

    public function getInscriptionclubClubid(): ?int
    {
        return $this->inscriptionclubClubid;
    }

    public function setInscriptionclubClubid(int $inscriptionclubClubid): self
    {
        $this->inscriptionclubClubid = $inscriptionclubClubid;

        return $this;
    }

    public function getInscriptionclubCotisation(): ?string
    {
        return $this->inscriptionclubCotisation;
    }

    public function setInscriptionclubCotisation(string $inscriptionclubCotisation): self
    {
        $this->inscriptionclubCotisation = $inscriptionclubCotisation;

        return $this;
    }


}
