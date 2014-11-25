<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousTypeBien
 *
 * @ORM\Table(name="sous_type_bien", indexes={@ORM\Index(name="Index_2", columns={"code_aptalis", "type_de_bien_id"})})
 * @ORM\Entity
 */
class SousTypeBien
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
     * @ORM\Column(name="type_de_bien_id", type="string", length=20, nullable=true)
     */
    private $typeDeBienId;

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
     * @return SousTypeBien
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
     * @return SousTypeBien
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
     * Set typeDeBienId
     *
     * @param string $typeDeBienId
     * @return SousTypeBien
     */
    public function setTypeDeBienId($typeDeBienId)
    {
        $this->typeDeBienId = $typeDeBienId;

        return $this;
    }

    /**
     * Get typeDeBienId
     *
     * @return string 
     */
    public function getTypeDeBienId()
    {
        return $this->typeDeBienId;
    }

    /**
     * Set codeAptalis
     *
     * @param string $codeAptalis
     * @return SousTypeBien
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
