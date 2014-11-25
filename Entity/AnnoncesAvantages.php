<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnnoncesAvantages
 *
 * @ORM\Table(name="annonces_avantages", indexes={@ORM\Index(name="fb_groupby_avantage_id_INDEX", columns={"avantage_id"})})
 * @ORM\Entity
 */
class AnnoncesAvantages
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
     * @var integer
     *
     * @ORM\Column(name="annonce_id", type="integer", nullable=true)
     */
    private $annonceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="avantage_id", type="integer", nullable=true)
     */
    private $avantageId;



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
     * @return AnnoncesAvantages
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
     * Set annonceId
     *
     * @param integer $annonceId
     * @return AnnoncesAvantages
     */
    public function setAnnonceId($annonceId)
    {
        $this->annonceId = $annonceId;

        return $this;
    }

    /**
     * Get annonceId
     *
     * @return integer 
     */
    public function getAnnonceId()
    {
        return $this->annonceId;
    }

    /**
     * Set avantageId
     *
     * @param integer $avantageId
     * @return AnnoncesAvantages
     */
    public function setAvantageId($avantageId)
    {
        $this->avantageId = $avantageId;

        return $this;
    }

    /**
     * Get avantageId
     *
     * @return integer 
     */
    public function getAvantageId()
    {
        return $this->avantageId;
    }
}
