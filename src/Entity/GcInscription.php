<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcInscription
 *
 * @ORM\Table(name="GC_Inscription", uniqueConstraints={@ORM\UniqueConstraint(name="Inscription_ID", columns={"Inscription_ID"})})
 * @ORM\Entity
 */
class GcInscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="Inscription_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inscriptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="Inscription_MembreID", type="integer", nullable=false)
     */
    private $inscriptionMembreid;

    /**
     * @var int
     *
     * @ORM\Column(name="Inscription_SaisonID", type="integer", nullable=false)
     */
    private $inscriptionSaisonid;

    public function getInscriptionId(): ?int
    {
        return $this->inscriptionId;
    }

    public function getInscriptionMembreid(): ?int
    {
        return $this->inscriptionMembreid;
    }

    public function setInscriptionMembreid(int $inscriptionMembreid): self
    {
        $this->inscriptionMembreid = $inscriptionMembreid;

        return $this;
    }

    public function getInscriptionSaisonid(): ?int
    {
        return $this->inscriptionSaisonid;
    }

    public function setInscriptionSaisonid(int $inscriptionSaisonid): self
    {
        $this->inscriptionSaisonid = $inscriptionSaisonid;

        return $this;
    }


}
