<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcOptionmembre
 *
 * @ORM\Table(name="GC_OptionMembre", uniqueConstraints={@ORM\UniqueConstraint(name="OptionMembre_ID", columns={"OptionMembre_ID"})})
 * @ORM\Entity
 */
class GcOptionmembre
{
    /**
     * @var int
     *
     * @ORM\Column(name="OptionMembre_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionmembreId;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionMembre_OptionClubID", type="integer", nullable=false)
     */
    private $optionmembreOptionclubid;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionMembre_MembreID", type="integer", nullable=false)
     */
    private $optionmembreMembreid;

    /**
     * @var string
     *
     * @ORM\Column(name="OptionMembre_Valeur", type="string", length=0, nullable=false)
     */
    private $optionmembreValeur;

    public function getOptionmembreId(): ?int
    {
        return $this->optionmembreId;
    }

    public function getOptionmembreOptionclubid(): ?int
    {
        return $this->optionmembreOptionclubid;
    }

    public function setOptionmembreOptionclubid(int $optionmembreOptionclubid): self
    {
        $this->optionmembreOptionclubid = $optionmembreOptionclubid;

        return $this;
    }

    public function getOptionmembreMembreid(): ?int
    {
        return $this->optionmembreMembreid;
    }

    public function setOptionmembreMembreid(int $optionmembreMembreid): self
    {
        $this->optionmembreMembreid = $optionmembreMembreid;

        return $this;
    }

    public function getOptionmembreValeur(): ?string
    {
        return $this->optionmembreValeur;
    }

    public function setOptionmembreValeur(string $optionmembreValeur): self
    {
        $this->optionmembreValeur = $optionmembreValeur;

        return $this;
    }


}
