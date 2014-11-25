<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slogan
 *
 * @ORM\Table(name="slogan", indexes={@ORM\Index(name="fb_order_libelle_slogan_INDEX", columns={"libelle_slogan"}), @ORM\Index(name="fb_order_actif_slogan_INDEX", columns={"actif_slogan"}), @ORM\Index(name="fb_order_ordre_slogan_INDEX", columns={"ordre_slogan"})})
 * @ORM\Entity
 */
class Slogan
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
     * @ORM\Column(name="libelle_slogan", type="string", length=255, nullable=true)
     */
    private $libelleSlogan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_slogan", type="boolean", nullable=true)
     */
    private $actifSlogan;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_slogan", type="integer", nullable=true)
     */
    private $ordreSlogan;



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
     * @return Slogan
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
     * Set libelleSlogan
     *
     * @param string $libelleSlogan
     * @return Slogan
     */
    public function setLibelleSlogan($libelleSlogan)
    {
        $this->libelleSlogan = $libelleSlogan;

        return $this;
    }

    /**
     * Get libelleSlogan
     *
     * @return string 
     */
    public function getLibelleSlogan()
    {
        return $this->libelleSlogan;
    }

    /**
     * Set actifSlogan
     *
     * @param boolean $actifSlogan
     * @return Slogan
     */
    public function setActifSlogan($actifSlogan)
    {
        $this->actifSlogan = $actifSlogan;

        return $this;
    }

    /**
     * Get actifSlogan
     *
     * @return boolean 
     */
    public function getActifSlogan()
    {
        return $this->actifSlogan;
    }

    /**
     * Set ordreSlogan
     *
     * @param integer $ordreSlogan
     * @return Slogan
     */
    public function setOrdreSlogan($ordreSlogan)
    {
        $this->ordreSlogan = $ordreSlogan;

        return $this;
    }

    /**
     * Get ordreSlogan
     *
     * @return integer 
     */
    public function getOrdreSlogan()
    {
        return $this->ordreSlogan;
    }
}
