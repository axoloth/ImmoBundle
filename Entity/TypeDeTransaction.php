<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDeTransaction
 *
 * @ORM\Table(name="type_de_transaction", indexes={@ORM\Index(name="fb_order_libelle_type_transaction_INDEX", columns={"libelle_type_transaction"}), @ORM\Index(name="fb_order_actif_type_transaction_INDEX", columns={"actif_type_transaction"}), @ORM\Index(name="fb_order_ordre_type_transaction_INDEX", columns={"ordre_type_transaction"})})
 * @ORM\Entity
 */
class TypeDeTransaction
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
     * @ORM\Column(name="libelle_type_transaction", type="string", length=255, nullable=true)
     */
    private $libelleTypeTransaction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif_type_transaction", type="boolean", nullable=true)
     */
    private $actifTypeTransaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_type_transaction", type="integer", nullable=true)
     */
    private $ordreTypeTransaction;



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
     * @return TypeDeTransaction
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
     * Set libelleTypeTransaction
     *
     * @param string $libelleTypeTransaction
     * @return TypeDeTransaction
     */
    public function setLibelleTypeTransaction($libelleTypeTransaction)
    {
        $this->libelleTypeTransaction = $libelleTypeTransaction;

        return $this;
    }

    /**
     * Get libelleTypeTransaction
     *
     * @return string 
     */
    public function getLibelleTypeTransaction()
    {
        return $this->libelleTypeTransaction;
    }

    /**
     * Set actifTypeTransaction
     *
     * @param boolean $actifTypeTransaction
     * @return TypeDeTransaction
     */
    public function setActifTypeTransaction($actifTypeTransaction)
    {
        $this->actifTypeTransaction = $actifTypeTransaction;

        return $this;
    }

    /**
     * Get actifTypeTransaction
     *
     * @return boolean 
     */
    public function getActifTypeTransaction()
    {
        return $this->actifTypeTransaction;
    }

    /**
     * Set ordreTypeTransaction
     *
     * @param integer $ordreTypeTransaction
     * @return TypeDeTransaction
     */
    public function setOrdreTypeTransaction($ordreTypeTransaction)
    {
        $this->ordreTypeTransaction = $ordreTypeTransaction;

        return $this;
    }

    /**
     * Get ordreTypeTransaction
     *
     * @return integer 
     */
    public function getOrdreTypeTransaction()
    {
        return $this->ordreTypeTransaction;
    }
}
