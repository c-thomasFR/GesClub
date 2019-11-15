<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFede
 *
 * @ORM\Table(name="GC_Fede", uniqueConstraints={@ORM\UniqueConstraint(name="Fede_ID", columns={"Fede_ID"})})
 * @ORM\Entity
 */
class GcFede
{
    /**
     * @var int
     *
     * @ORM\Column(name="Fede_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fedeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Fede_Nom", type="text", length=65535, nullable=false)
     */
    private $fedeNom;

    public function getFedeId(): ?int
    {
        return $this->fedeId;
    }

    public function getFedeNom(): ?string
    {
        return $this->fedeNom;
    }

    public function setFedeNom(string $fedeNom): self
    {
        $this->fedeNom = $fedeNom;

        return $this;
    }


}
