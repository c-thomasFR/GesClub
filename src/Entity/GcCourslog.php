<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCourslog
 *
 * @ORM\Table(name="GC_CoursLog", uniqueConstraints={@ORM\UniqueConstraint(name="CoursLog_ID", columns={"CoursLog_ID"})})
 * @ORM\Entity
 */
class GcCourslog
{
    /**
     * @var int
     *
     * @ORM\Column(name="CoursLog_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $courslogId;

    /**
     * @var int
     *
     * @ORM\Column(name="CoursLog_CoursID", type="integer", nullable=false)
     */
    private $courslogCoursid;

    /**
     * @var string
     *
     * @ORM\Column(name="CoursLog_Log", type="text", length=65535, nullable=false)
     */
    private $courslogLog;

    /**
     * @var int
     *
     * @ORM\Column(name="CoursLog_NbreParticipant", type="integer", nullable=false)
     */
    private $courslogNbreparticipant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CoursLog_Date", type="date", nullable=false)
     */
    private $courslogDate;

    public function getCourslogId(): ?int
    {
        return $this->courslogId;
    }

    public function getCourslogCoursid(): ?int
    {
        return $this->courslogCoursid;
    }

    public function setCourslogCoursid(int $courslogCoursid): self
    {
        $this->courslogCoursid = $courslogCoursid;

        return $this;
    }

    public function getCourslogLog(): ?string
    {
        return $this->courslogLog;
    }

    public function setCourslogLog(string $courslogLog): self
    {
        $this->courslogLog = $courslogLog;

        return $this;
    }

    public function getCourslogNbreparticipant(): ?int
    {
        return $this->courslogNbreparticipant;
    }

    public function setCourslogNbreparticipant(int $courslogNbreparticipant): self
    {
        $this->courslogNbreparticipant = $courslogNbreparticipant;

        return $this;
    }

    public function getCourslogDate(): ?\DateTimeInterface
    {
        return $this->courslogDate;
    }

    public function setCourslogDate(\DateTimeInterface $courslogDate): self
    {
        $this->courslogDate = $courslogDate;

        return $this;
    }


}
