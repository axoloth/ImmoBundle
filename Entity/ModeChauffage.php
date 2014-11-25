<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeChauffage
 *
 * @ORM\Table(name="mode_chauffage", indexes={@ORM\Index(name="fb_order_libelle_INDEX", columns={"libelle"}), @ORM\Index(name="Index_3", columns={"code_aptalis"})})
 * @ORM\Entity
 */
class ModeChauffage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=true)
     */
    private $dateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="code_aptalis", type="string", length=20, nullable=true)
     */
    private $codeAptalis;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return ModeChauffage
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return ModeChauffage
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return ModeChauffage
     */
    public function setCodeAptalis($codeAptalis)
    {
        $this->codeAptalis = $codeAptalis;

        return $this;
    }

    /**
     * Get codeAptalis
     *
     * @return string 
     */
    public function getCodeAptalis()
    {
        return $this->codeAptalis;
    }
}
