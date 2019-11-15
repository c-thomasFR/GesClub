<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcOptionclub
 *
 * @ORM\Table(name="GC_OptionClub", uniqueConstraints={@ORM\UniqueConstraint(name="OptionClub_ID", columns={"OptionClub_ID"})})
 * @ORM\Entity
 */
class GcOptionclub
{
    /**
     * @var int
     *
     * @ORM\Column(name="OptionClub_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionclubId;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionClub_ClubID", type="integer", nullable=false)
     */
    private $optionclubClubid;

    /**
     * @var string
     *
     * @ORM\Column(name="OptionClub_Option", type="text", length=65535, nullable=false)
     */
    private $optionclubOption;

    public function getOptionclubId(): ?int
    {
        return $this->optionclubId;
    }

    public function getOptionclubClubid(): ?int
    {
        return $this->optionclubClubid;
    }

    public function setOptionclubClubid(int $optionclubClubid): self
    {
        $this->optionclubClubid = $optionclubClubid;

        return $this;
    }

    public function getOptionclubOption(): ?string
    {
        return $this->optionclubOption;
    }

    public function setOptionclubOption(string $optionclubOption): self
    {
        $this->optionclubOption = $optionclubOption;

        return $this;
    }


}
