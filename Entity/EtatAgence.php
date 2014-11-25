<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatAgence
 *
 * @ORM\Table(name="etat_agence", indexes={@ORM\Index(name="fb_order_libelle_etat_agence_INDEX", columns={"libelle_etat_agence"}), @ORM\Index(name="fb_order_actif_etat_agence_INDEX", columns={"actif_etat_agence"}), @ORM\Index(name="fb_order_ordre_etat_agence_INDEX", columns={"ordre_etat_agence"})})
 * @ORM\Entity
 */
class EtatAgence
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
     * @ORM\Column(name="libelle_etat_agence", type="string", length=255, nullable=true)
     */
    private $libelleEtatAgence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_etat_agence", type="boolean", nullable=true)
     */
    private $actifEtatAgence;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_etat_agence", type="integer", nullable=true)
     */
    private $ordreEtatAgence;



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
     * @return EtatAgence
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
     * Set libelleEtatAgence
     *
     * @param string $libelleEtatAgence
     * @return EtatAgence
     */
    public function setLibelleEtatAgence($libelleEtatAgence)
    {
        $this->libelleEtatAgence = $libelleEtatAgence;

        return $this;
    }

    /**
     * Get libelleEtatAgence
     *
     * @return string 
     */
    public function getLibelleEtatAgence()
    {
        return $this->libelleEtatAgence;
    }

    /**
     * Set actifEtatAgence
     *
     * @param boolean $actifEtatAgence
     * @return EtatAgence
     */
    public function setActifEtatAgence($actifEtatAgence)
    {
        $this->actifEtatAgence = $actifEtatAgence;

        return $this;
    }

    /**
     * Get actifEtatAgence
     *
     * @return boolean 
     */
    public function getActifEtatAgence()
    {
        return $this->actifEtatAgence;
    }

    /**
     * Set ordreEtatAgence
     *
     * @param integer $ordreEtatAgence
     * @return EtatAgence
     */
    public function setOrdreEtatAgence($ordreEtatAgence)
    {
        $this->ordreEtatAgence = $ordreEtatAgence;

        return $this;
    }

    /**
     * Get ordreEtatAgence
     *
     * @return integer 
     */
    public function getOrdreEtatAgence()
    {
        return $this->ordreEtatAgence;
    }
}
