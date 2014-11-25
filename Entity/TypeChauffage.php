<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeChauffage
 *
 * @ORM\Table(name="type_chauffage", indexes={@ORM\Index(name="fb_order_libelle_type_chauffage_INDEX", columns={"libelle_type_chauffage"}), @ORM\Index(name="fb_order_actif_type_chauffage_INDEX", columns={"actif_type_chauffage"}), @ORM\Index(name="fb_order_ordre_type_chauffage_INDEX", columns={"ordre_type_chauffage"}), @ORM\Index(name="Index_5", columns={"code_aptalis"})})
 * @ORM\Entity
 */
class TypeChauffage
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
     * @ORM\Column(name="libelle_type_chauffage", type="string", length=255, nullable=true)
     */
    private $libelleTypeChauffage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_type_chauffage", type="boolean", nullable=false)
     */
    private $actifTypeChauffage = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ordre_type_chauffage", type="string", length=3, nullable=true)
     */
    private $ordreTypeChauffage;

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
     * @return TypeChauffage
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
     * Set libelleTypeChauffage
     *
     * @param string $libelleTypeChauffage
     * @return TypeChauffage
     */
    public function setLibelleTypeChauffage($libelleTypeChauffage)
    {
        $this->libelleTypeChauffage = $libelleTypeChauffage;

        return $this;
    }

    /**
     * Get libelleTypeChauffage
     *
     * @return string 
     */
    public function getLibelleTypeChauffage()
    {
        return $this->libelleTypeChauffage;
    }

    /**
     * Set actifTypeChauffage
     *
     * @param boolean $actifTypeChauffage
     * @return TypeChauffage
     */
    public function setActifTypeChauffage($actifTypeChauffage)
    {
        $this->actifTypeChauffage = $actifTypeChauffage;

        return $this;
    }

    /**
     * Get actifTypeChauffage
     *
     * @return boolean 
     */
    public function getActifTypeChauffage()
    {
        return $this->actifTypeChauffage;
    }

    /**
     * Set ordreTypeChauffage
     *
     * @param string $ordreTypeChauffage
     * @return TypeChauffage
     */
    public function setOrdreTypeChauffage($ordreTypeChauffage)
    {
        $this->ordreTypeChauffage = $ordreTypeChauffage;

        return $this;
    }

    /**
     * Get ordreTypeChauffage
     *
     * @return string 
     */
    public function getOrdreTypeChauffage()
    {
        return $this->ordreTypeChauffage;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return TypeChauffage
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
