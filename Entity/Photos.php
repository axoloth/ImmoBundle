<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity
 */
class Photos
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
     * @ORM\Column(name="ordre_photo", type="string", length=3, nullable=true)
     */
    private $ordrePhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text", nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="annonce_id", type="integer", nullable=true)
     */
    private $annonceId;

    /**
     * @var string
     *
     * @ORM\Column(name="traitementFait", type="string", length=1, nullable=false)
     */
    private $traitementfait = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="originale", type="string", length=255, nullable=false)
     */
    private $originale;



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
     * @return Photos
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
     * Set ordrePhoto
     *
     * @param string $ordrePhoto
     * @return Photos
     */
    public function setOrdrePhoto($ordrePhoto)
    {
        $this->ordrePhoto = $ordrePhoto;

        return $this;
    }

    /**
     * Get ordrePhoto
     *
     * @return string 
     */
    public function getOrdrePhoto()
    {
        return $this->ordrePhoto;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Photos
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set annonceId
     *
     * @param integer $annonceId
     * @return Photos
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
     * Set traitementfait
     *
     * @param string $traitementfait
     * @return Photos
     */
    public function setTraitementfait($traitementfait)
    {
        $this->traitementfait = $traitementfait;

        return $this;
    }

    /**
     * Get traitementfait
     *
     * @return string 
     */
    public function getTraitementfait()
    {
        return $this->traitementfait;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Photos
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set originale
     *
     * @param string $originale
     * @return Photos
     */
    public function setOriginale($originale)
    {
        $this->originale = $originale;

        return $this;
    }

    /**
     * Get originale
     *
     * @return string 
     */
    public function getOriginale()
    {
        return $this->originale;
    }
}
