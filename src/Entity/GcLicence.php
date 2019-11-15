<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcLicence
 *
 * @ORM\Table(name="GC_Licence", uniqueConstraints={@ORM\UniqueConstraint(name="Licence_ID", columns={"Licence_ID"})})
 * @ORM\Entity
 */
class GcLicence
{
    /**
     * @var int
     *
     * @ORM\Column(name="Licence_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $licenceId;

    /**
     * @var int
     *
     * @ORM\Column(name="Licence_MembreID", type="integer", nullable=false)
     */
    private $licenceMembreid;

    /**
     * @var string
     *
     * @ORM\Column(name="Licence_Numero", type="text", length=65535, nullable=false)
     */
    private $licenceNumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Licence_Date", type="date", nullable=false)
     */
    private $licenceDate;

    /**
     * @var int
     *
     * @ORM\Column(name="Licence_FedeID", type="integer", nullable=false)
     */
    private $licenceFedeid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Licence_DateCertif", type="date", nullable=false)
     */
    private $licenceDatecertif;

    public function getLicenceId(): ?int
    {
        return $this->licenceId;
    }

    public function getLicenceMembreid(): ?int
    {
        return $this->licenceMembreid;
    }

    public function setLicenceMembreid(int $licenceMembreid): self
    {
        $this->licenceMembreid = $licenceMembreid;

        return $this;
    }

    public function getLicenceNumero(): ?string
    {
        return $this->licenceNumero;
    }

    public function setLicenceNumero(string $licenceNumero): self
    {
        $this->licenceNumero = $licenceNumero;

        return $this;
    }

    public function getLicenceDate(): ?\DateTimeInterface
    {
        return $this->licenceDate;
    }

    public function setLicenceDate(\DateTimeInterface $licenceDate): self
    {
        $this->licenceDate = $licenceDate;

        return $this;
    }

    public function getLicenceFedeid(): ?int
    {
        return $this->licenceFedeid;
    }

    public function setLicenceFedeid(int $licenceFedeid): self
    {
        $this->licenceFedeid = $licenceFedeid;

        return $this;
    }

    public function getLicenceDatecertif(): ?\DateTimeInterface
    {
        return $this->licenceDatecertif;
    }

    public function setLicenceDatecertif(\DateTimeInterface $licenceDatecertif): self
    {
        $this->licenceDatecertif = $licenceDatecertif;

        return $this;
    }


}
