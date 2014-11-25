<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDeBien
 *
 * @ORM\Table(name="type_de_bien", indexes={@ORM\Index(name="fb_order_libelle_type_bien_INDEX", columns={"libelle_type_bien"}), @ORM\Index(name="fb_order_actif_type_bien_INDEX", columns={"actif_type_bien"}), @ORM\Index(name="fb_order_ordre_type_bien_INDEX", columns={"ordre_type_bien"}), @ORM\Index(name="Index_5", columns={"code_aptalis"})})
 * @ORM\Entity
 */
class TypeDeBien
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
     * @ORM\Column(name="libelle_type_bien", type="string", length=255, nullable=true)
     */
    private $libelleTypeBien;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_type_bien", type="boolean", nullable=false)
     */
    private $actifTypeBien = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_type_bien", type="integer", nullable=true)
     */
    private $ordreTypeBien;

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
     * @return TypeDeBien
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
     * Set libelleTypeBien
     *
     * @param string $libelleTypeBien
     * @return TypeDeBien
     */
    public function setLibelleTypeBien($libelleTypeBien)
    {
        $this->libelleTypeBien = $libelleTypeBien;

        return $this;
    }

    /**
     * Get libelleTypeBien
     *
     * @return string 
     */
    public function getLibelleTypeBien()
    {
        return $this->libelleTypeBien;
    }

    /**
     * Set actifTypeBien
     *
     * @param boolean $actifTypeBien
     * @return TypeDeBien
     */
    public function setActifTypeBien($actifTypeBien)
    {
        $this->actifTypeBien = $actifTypeBien;

        return $this;
    }

    /**
     * Get actifTypeBien
     *
     * @return boolean 
     */
    public function getActifTypeBien()
    {
        return $this->actifTypeBien;
    }

    /**
     * Set ordreTypeBien
     *
     * @param integer $ordreTypeBien
     * @return TypeDeBien
     */
    public function setOrdreTypeBien($ordreTypeBien)
    {
        $this->ordreTypeBien = $ordreTypeBien;

        return $this;
    }

    /**
     * Get ordreTypeBien
     *
     * @return integer 
     */
    public function getOrdreTypeBien()
    {
        return $this->ordreTypeBien;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return TypeDeBien
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
