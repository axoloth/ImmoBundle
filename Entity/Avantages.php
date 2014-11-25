<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avantages
 *
 * @ORM\Table(name="avantages", indexes={@ORM\Index(name="fb_order_libelle_avantage_INDEX", columns={"libelle_avantage"}), @ORM\Index(name="fb_order_ordre_avantage_INDEX", columns={"ordre_avantage"}), @ORM\Index(name="fb_order_actif_avantage_INDEX", columns={"actif_avantage"})})
 * @ORM\Entity
 */
class Avantages
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
     * @ORM\Column(name="libelle_avantage", type="string", length=255, nullable=true)
     */
    private $libelleAvantage;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre_avantage", type="string", length=3, nullable=true)
     */
    private $ordreAvantage;

    /**
     * @var string
     *
     * @ORM\Column(name="icone_avantage", type="text", nullable=true)
     */
    private $iconeAvantage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_avantage", type="boolean", nullable=true)
     */
    private $actifAvantage;



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
     * @return Avantages
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
     * Set libelleAvantage
     *
     * @param string $libelleAvantage
     * @return Avantages
     */
    public function setLibelleAvantage($libelleAvantage)
    {
        $this->libelleAvantage = $libelleAvantage;

        return $this;
    }

    /**
     * Get libelleAvantage
     *
     * @return string 
     */
    public function getLibelleAvantage()
    {
        return $this->libelleAvantage;
    }

    /**
     * Set ordreAvantage
     *
     * @param string $ordreAvantage
     * @return Avantages
     */
    public function setOrdreAvantage($ordreAvantage)
    {
        $this->ordreAvantage = $ordreAvantage;

        return $this;
    }

    /**
     * Get ordreAvantage
     *
     * @return string 
     */
    public function getOrdreAvantage()
    {
        return $this->ordreAvantage;
    }

    /**
     * Set iconeAvantage
     *
     * @param string $iconeAvantage
     * @return Avantages
     */
    public function setIconeAvantage($iconeAvantage)
    {
        $this->iconeAvantage = $iconeAvantage;

        return $this;
    }

    /**
     * Get iconeAvantage
     *
     * @return string 
     */
    public function getIconeAvantage()
    {
        return $this->iconeAvantage;
    }

    /**
     * Set actifAvantage
     *
     * @param boolean $actifAvantage
     * @return Avantages
     */
    public function setActifAvantage($actifAvantage)
    {
        $this->actifAvantage = $actifAvantage;

        return $this;
    }

    /**
     * Get actifAvantage
     *
     * @return boolean 
     */
    public function getActifAvantage()
    {
        return $this->actifAvantage;
    }
}
