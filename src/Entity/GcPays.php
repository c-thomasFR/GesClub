<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPays
 *
 * @ORM\Table(name="GC_Pays", uniqueConstraints={@ORM\UniqueConstraint(name="Pays_ID", columns={"Pays_ID"})})
 * @ORM\Entity
 */
class GcPays
{
    /**
     * @var int
     *
     * @ORM\Column(name="Pays_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paysId;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays_Nom", type="text", length=65535, nullable=false)
     */
    private $paysNom;

    public function getPaysId(): ?int
    {
        return $this->paysId;
    }

    public function getPaysNom(): ?string
    {
        return $this->paysNom;
    }

    public function setPaysNom(string $paysNom): self
    {
        $this->paysNom = $paysNom;

        return $this;
    }


}
