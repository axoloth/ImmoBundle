<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatBien
 *
 * @ORM\Table(name="etat_bien", indexes={@ORM\Index(name="fb_order_libelle_etat_bien_INDEX", columns={"libelle_etat_bien"}), @ORM\Index(name="fb_order_actif_etat_bien_INDEX", columns={"actif_etat_bien"}), @ORM\Index(name="fb_order_ordre_etat_bien_INDEX", columns={"ordre_etat_bien"}), @ORM\Index(name="Index_5", columns={"code_aptalis"})})
 * @ORM\Entity
 */
class EtatBien
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
     * @ORM\Column(name="libelle_etat_bien", type="string", length=255, nullable=true)
     */
    private $libelleEtatBien;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_etat_bien", type="boolean", nullable=false)
     */
    private $actifEtatBien = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_etat_bien", type="integer", nullable=true)
     */
    private $ordreEtatBien;

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
     * @return EtatBien
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
     * Set libelleEtatBien
     *
     * @param string $libelleEtatBien
     * @return EtatBien
     */
    public function setLibelleEtatBien($libelleEtatBien)
    {
        $this->libelleEtatBien = $libelleEtatBien;

        return $this;
    }

    /**
     * Get libelleEtatBien
     *
     * @return string 
     */
    public function getLibelleEtatBien()
    {
        return $this->libelleEtatBien;
    }

    /**
     * Set actifEtatBien
     *
     * @param boolean $actifEtatBien
     * @return EtatBien
     */
    public function setActifEtatBien($actifEtatBien)
    {
        $this->actifEtatBien = $actifEtatBien;

        return $this;
    }

    /**
     * Get actifEtatBien
     *
     * @return boolean 
     */
    public function getActifEtatBien()
    {
        return $this->actifEtatBien;
    }

    /**
     * Set ordreEtatBien
     *
     * @param integer $ordreEtatBien
     * @return EtatBien
     */
    public function setOrdreEtatBien($ordreEtatBien)
    {
        $this->ordreEtatBien = $ordreEtatBien;

        return $this;
    }

    /**
     * Get ordreEtatBien
     *
     * @return integer 
     */
    public function getOrdreEtatBien()
    {
        return $this->ordreEtatBien;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return EtatBien
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
