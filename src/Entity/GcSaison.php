<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSaison
 *
 * @ORM\Table(name="GC_Saison", uniqueConstraints={@ORM\UniqueConstraint(name="Saison_ID", columns={"Saison_ID"})})
 * @ORM\Entity
 */
class GcSaison
{
    /**
     * @var int
     *
     * @ORM\Column(name="Saison_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saisonId;

    /**
     * @var string
     *
     * @ORM\Column(name="Saison_Nom", type="text", length=65535, nullable=false)
     */
    private $saisonNom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Saison_Debut", type="date", nullable=false)
     */
    private $saisonDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Saison_Fin", type="date", nullable=false)
     */
    private $saisonFin;

    public function getSaisonId(): ?int
    {
        return $this->saisonId;
    }

    public function getSaisonNom(): ?string
    {
        return $this->saisonNom;
    }

    public function setSaisonNom(string $saisonNom): self
    {
        $this->saisonNom = $saisonNom;

        return $this;
    }

    public function getSaisonDebut(): ?\DateTimeInterface
    {
        return $this->saisonDebut;
    }

    public function setSaisonDebut(\DateTimeInterface $saisonDebut): self
    {
        $this->saisonDebut = $saisonDebut;

        return $this;
    }

    public function getSaisonFin(): ?\DateTimeInterface
    {
        return $this->saisonFin;
    }

    public function setSaisonFin(\DateTimeInterface $saisonFin): self
    {
        $this->saisonFin = $saisonFin;

        return $this;
    }


}
