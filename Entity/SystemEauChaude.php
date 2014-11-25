<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemEauChaude
 *
 * @ORM\Table(name="system_eau_chaude", indexes={@ORM\Index(name="fb_order_libelle_system_eau_chaude_INDEX", columns={"libelle_system_eau_chaude"}), @ORM\Index(name="fb_order_actif_system_eau_chaude_INDEX", columns={"actif_system_eau_chaude"}), @ORM\Index(name="fb_order_ordre_eau_chaude_INDEX", columns={"ordre_eau_chaude"}), @ORM\Index(name="Index_5", columns={"code_aptalis"})})
 * @ORM\Entity
 */
class SystemEauChaude
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
     * @ORM\Column(name="libelle_system_eau_chaude", type="string", length=255, nullable=true)
     */
    private $libelleSystemEauChaude;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_system_eau_chaude", type="boolean", nullable=false)
     */
    private $actifSystemEauChaude = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ordre_eau_chaude", type="string", length=3, nullable=true)
     */
    private $ordreEauChaude;

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
     * @return SystemEauChaude
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
     * Set libelleSystemEauChaude
     *
     * @param string $libelleSystemEauChaude
     * @return SystemEauChaude
     */
    public function setLibelleSystemEauChaude($libelleSystemEauChaude)
    {
        $this->libelleSystemEauChaude = $libelleSystemEauChaude;

        return $this;
    }

    /**
     * Get libelleSystemEauChaude
     *
     * @return string 
     */
    public function getLibelleSystemEauChaude()
    {
        return $this->libelleSystemEauChaude;
    }

    /**
     * Set actifSystemEauChaude
     *
     * @param boolean $actifSystemEauChaude
     * @return SystemEauChaude
     */
    public function setActifSystemEauChaude($actifSystemEauChaude)
    {
        $this->actifSystemEauChaude = $actifSystemEauChaude;

        return $this;
    }

    /**
     * Get actifSystemEauChaude
     *
     * @return boolean 
     */
    public function getActifSystemEauChaude()
    {
        return $this->actifSystemEauChaude;
    }

    /**
     * Set ordreEauChaude
     *
     * @param string $ordreEauChaude
     * @return SystemEauChaude
     */
    public function setOrdreEauChaude($ordreEauChaude)
    {
        $this->ordreEauChaude = $ordreEauChaude;

        return $this;
    }

    /**
     * Get ordreEauChaude
     *
     * @return string 
     */
    public function getOrdreEauChaude()
    {
        return $this->ordreEauChaude;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return SystemEauChaude
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
