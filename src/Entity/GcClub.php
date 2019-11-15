<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcClub
 *
 * @ORM\Table(name="GC_Club", uniqueConstraints={@ORM\UniqueConstraint(name="Club_ID", columns={"Club_ID"})}, indexes={@ORM\Index(name="Club_ID_2", columns={"Club_ID"})})
 * @ORM\Entity
 */
class GcClub
{
    /**
     * @var int
     *
     * @ORM\Column(name="Club_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clubId;

    /**
     * @var string
     *
     * @ORM\Column(name="Club_Nom", type="text", length=65535, nullable=false)
     */
    private $clubNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Club_Ville", type="text", length=65535, nullable=false)
     */
    private $clubVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Club_Cotisation", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $clubCotisation;

    public function getClubId(): ?int
    {
        return $this->clubId;
    }

    public function getClubNom(): ?string
    {
        return $this->clubNom;
    }

    public function setClubNom(string $clubNom): self
    {
        $this->clubNom = $clubNom;

        return $this;
    }

    public function getClubVille(): ?string
    {
        return $this->clubVille;
    }

    public function setClubVille(string $clubVille): self
    {
        $this->clubVille = $clubVille;

        return $this;
    }

    public function getClubCotisation(): ?string
    {
        return $this->clubCotisation;
    }

    public function setClubCotisation(string $clubCotisation): self
    {
        $this->clubCotisation = $clubCotisation;

        return $this;
    }


}
