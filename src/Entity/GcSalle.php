<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSalle
 *
 * @ORM\Table(name="GC_Salle", uniqueConstraints={@ORM\UniqueConstraint(name="Salle_ID", columns={"Salle_ID"})})
 * @ORM\Entity
 */
class GcSalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="Salle_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salleId;

    /**
     * @var int
     *
     * @ORM\Column(name="Salle_ClubID", type="integer", nullable=false)
     */
    private $salleClubid;

    /**
     * @var string
     *
     * @ORM\Column(name="Salle_Nom", type="text", length=65535, nullable=false)
     */
    private $salleNom;

    public function getSalleId(): ?int
    {
        return $this->salleId;
    }

    public function getSalleClubid(): ?int
    {
        return $this->salleClubid;
    }

    public function setSalleClubid(int $salleClubid): self
    {
        $this->salleClubid = $salleClubid;

        return $this;
    }

    public function getSalleNom(): ?string
    {
        return $this->salleNom;
    }

    public function setSalleNom(string $salleNom): self
    {
        $this->salleNom = $salleNom;

        return $this;
    }


}
