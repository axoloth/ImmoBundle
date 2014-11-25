<?php

namespace Axoloth\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="fb_order_texte_INDEX", columns={"texte"}), @ORM\Index(name="fb_order_type_transaction_id_INDEX", columns={"type_transaction_id"}), @ORM\Index(name="fb_order_type_de_bien_id_INDEX", columns={"type_de_bien_id"}), @ORM\Index(name="fb_groupbyorder_date_time_INDEX", columns={"date_time"}), @ORM\Index(name="fb_order_titre_annonce_INDEX", columns={"titre_annonce"}), @ORM\Index(name="fb_order_reference_annonce_INDEX", columns={"reference_annonce"}), @ORM\Index(name="fb_order_ville_annonce_INDEX", columns={"ville_annonce"}), @ORM\Index(name="fb_order_departement_annonce_INDEX", columns={"departement_annonce"}), @ORM\Index(name="fb_order_prix_annonce_INDEX", columns={"prix_annonce"}), @ORM\Index(name="fb_order_surface_habitable_annonce_INDEX", columns={"surface_habitable_annonce"}), @ORM\Index(name="fb_order_surface_terrain_annone_INDEX", columns={"surface_terrain_annone"}), @ORM\Index(name="fb_order_modeChauffage_id_INDEX", columns={"modeChauffage_id"}), @ORM\Index(name="fb_order_dpe_valeur_INDEX", columns={"dpe_valeur"}), @ORM\Index(name="fb_order_ges_valeur_INDEX", columns={"ges_valeur"})})
 * @ORM\Entity
 */
class Annonce
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
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_transaction_id", type="integer", nullable=true)
     */
    private $typeTransactionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_de_bien_id", type="integer", nullable=true)
     */
    private $typeDeBienId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_annonce", type="string", length=20, nullable=true)
     */
    private $referenceAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_annonce", type="text", nullable=true)
     */
    private $titreAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_annonce", type="string", length=255, nullable=true)
     */
    private $villeAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_annonce", type="string", length=2, nullable=true)
     */
    private $departementAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier_annonce", type="string", length=255, nullable=true)
     */
    private $quartierAnnonce;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coup_coeur_annonce", type="boolean", nullable=true)
     */
    private $coupCoeurAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_annonce", type="string", length=20, nullable=true)
     */
    private $prixAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_annonce", type="string", length=255, nullable=true)
     */
    private $chargeAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="honoraire_annonce", type="string", length=255, nullable=true)
     */
    private $honoraireAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_pieces", type="string", length=3, nullable=true)
     */
    private $nbPieces;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_salle_bain", type="string", length=2, nullable=true)
     */
    private $nbSalleBain;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_wc", type="string", length=2, nullable=true)
     */
    private $nbWc;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_chauffage_id", type="integer", nullable=true)
     */
    private $typeChauffageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_eau_chaude_id", type="integer", nullable=true)
     */
    private $systemEauChaudeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="slogan_id", type="integer", nullable=true)
     */
    private $sloganId;

    /**
     * @var string
     *
     * @ORM\Column(name="surface_habitable_annonce", type="string", length=255, nullable=true)
     */
    private $surfaceHabitableAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="surface_terrain_annone", type="string", length=255, nullable=true)
     */
    private $surfaceTerrainAnnone;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_bien_id", type="integer", nullable=true)
     */
    private $etatBienId;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_agence_id", type="integer", nullable=true)
     */
    private $etatAgenceId;

    /**
     * @var string
     *
     * @ORM\Column(name="annonce_nature_charge", type="string", length=255, nullable=true)
     */
    private $annonceNatureCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="dpe", type="string", length=255, nullable=true)
     */
    private $dpe;

    /**
     * @var string
     *
     * @ORM\Column(name="ges", type="string", length=255, nullable=true)
     */
    private $ges;

    /**
     * @var integer
     *
     * @ORM\Column(name="modeChauffage_id", type="integer", nullable=true)
     */
    private $modechauffageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_interieur_bien_id", type="integer", nullable=true)
     */
    private $etatInterieurBienId;

    /**
     * @var string
     *
     * @ORM\Column(name="dpe_valeur", type="string", length=255, nullable=true)
     */
    private $dpeValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="ges_valeur", type="string", length=255, nullable=true)
     */
    private $gesValeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="sous_type_bien_id", type="integer", nullable=true)
     */
    private $sousTypeBienId;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_chambre", type="string", length=3, nullable=true)
     */
    private $nbChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_metre_carre", type="string", length=20, nullable=true)
     */
    private $prixMetreCarre;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=6, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="exclusivite", type="string", length=255, nullable=true)
     */
    private $exclusivite;



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
     * @return Annonce
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
     * Set texte
     *
     * @param string $texte
     * @return Annonce
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set typeTransactionId
     *
     * @param integer $typeTransactionId
     * @return Annonce
     */
    public function setTypeTransactionId($typeTransactionId)
    {
        $this->typeTransactionId = $typeTransactionId;

        return $this;
    }

    /**
     * Get typeTransactionId
     *
     * @return integer 
     */
    public function getTypeTransactionId()
    {
        return $this->typeTransactionId;
    }

    /**
     * Set typeDeBienId
     *
     * @param integer $typeDeBienId
     * @return Annonce
     */
    public function setTypeDeBienId($typeDeBienId)
    {
        $this->typeDeBienId = $typeDeBienId;

        return $this;
    }

    /**
     * Get typeDeBienId
     *
     * @return integer 
     */
    public function getTypeDeBienId()
    {
        return $this->typeDeBienId;
    }

    /**
     * Set referenceAnnonce
     *
     * @param string $referenceAnnonce
     * @return Annonce
     */
    public function setReferenceAnnonce($referenceAnnonce)
    {
        $this->referenceAnnonce = $referenceAnnonce;

        return $this;
    }

    /**
     * Get referenceAnnonce
     *
     * @return string 
     */
    public function getReferenceAnnonce()
    {
        return $this->referenceAnnonce;
    }

    /**
     * Set titreAnnonce
     *
     * @param string $titreAnnonce
     * @return Annonce
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce
     *
     * @return string 
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set villeAnnonce
     *
     * @param string $villeAnnonce
     * @return Annonce
     */
    public function setVilleAnnonce($villeAnnonce)
    {
        $this->villeAnnonce = $villeAnnonce;

        return $this;
    }

    /**
     * Get villeAnnonce
     *
     * @return string 
     */
    public function getVilleAnnonce()
    {
        return $this->villeAnnonce;
    }

    /**
     * Set departementAnnonce
     *
     * @param string $departementAnnonce
     * @return Annonce
     */
    public function setDepartementAnnonce($departementAnnonce)
    {
        $this->departementAnnonce = $departementAnnonce;

        return $this;
    }

    /**
     * Get departementAnnonce
     *
     * @return string 
     */
    public function getDepartementAnnonce()
    {
        return $this->departementAnnonce;
    }

    /**
     * Set quartierAnnonce
     *
     * @param string $quartierAnnonce
     * @return Annonce
     */
    public function setQuartierAnnonce($quartierAnnonce)
    {
        $this->quartierAnnonce = $quartierAnnonce;

        return $this;
    }

    /**
     * Get quartierAnnonce
     *
     * @return string 
     */
    public function getQuartierAnnonce()
    {
        return $this->quartierAnnonce;
    }

    /**
     * Set coupCoeurAnnonce
     *
     * @param boolean $coupCoeurAnnonce
     * @return Annonce
     */
    public function setCoupCoeurAnnonce($coupCoeurAnnonce)
    {
        $this->coupCoeurAnnonce = $coupCoeurAnnonce;

        return $this;
    }

    /**
     * Get coupCoeurAnnonce
     *
     * @return boolean 
     */
    public function getCoupCoeurAnnonce()
    {
        return $this->coupCoeurAnnonce;
    }

    /**
     * Set prixAnnonce
     *
     * @param string $prixAnnonce
     * @return Annonce
     */
    public function setPrixAnnonce($prixAnnonce)
    {
        $this->prixAnnonce = $prixAnnonce;

        return $this;
    }

    /**
     * Get prixAnnonce
     *
     * @return string 
     */
    public function getPrixAnnonce()
    {
        return $this->prixAnnonce;
    }

    /**
     * Set chargeAnnonce
     *
     * @param string $chargeAnnonce
     * @return Annonce
     */
    public function setChargeAnnonce($chargeAnnonce)
    {
        $this->chargeAnnonce = $chargeAnnonce;

        return $this;
    }

    /**
     * Get chargeAnnonce
     *
     * @return string 
     */
    public function getChargeAnnonce()
    {
        return $this->chargeAnnonce;
    }

    /**
     * Set honoraireAnnonce
     *
     * @param string $honoraireAnnonce
     * @return Annonce
     */
    public function setHonoraireAnnonce($honoraireAnnonce)
    {
        $this->honoraireAnnonce = $honoraireAnnonce;

        return $this;
    }

    /**
     * Get honoraireAnnonce
     *
     * @return string 
     */
    public function getHonoraireAnnonce()
    {
        return $this->honoraireAnnonce;
    }

    /**
     * Set nbPieces
     *
     * @param string $nbPieces
     * @return Annonce
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get nbPieces
     *
     * @return string 
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set nbSalleBain
     *
     * @param string $nbSalleBain
     * @return Annonce
     */
    public function setNbSalleBain($nbSalleBain)
    {
        $this->nbSalleBain = $nbSalleBain;

        return $this;
    }

    /**
     * Get nbSalleBain
     *
     * @return string 
     */
    public function getNbSalleBain()
    {
        return $this->nbSalleBain;
    }

    /**
     * Set nbWc
     *
     * @param string $nbWc
     * @return Annonce
     */
    public function setNbWc($nbWc)
    {
        $this->nbWc = $nbWc;

        return $this;
    }

    /**
     * Get nbWc
     *
     * @return string 
     */
    public function getNbWc()
    {
        return $this->nbWc;
    }

    /**
     * Set typeChauffageId
     *
     * @param integer $typeChauffageId
     * @return Annonce
     */
    public function setTypeChauffageId($typeChauffageId)
    {
        $this->typeChauffageId = $typeChauffageId;

        return $this;
    }

    /**
     * Get typeChauffageId
     *
     * @return integer 
     */
    public function getTypeChauffageId()
    {
        return $this->typeChauffageId;
    }

    /**
     * Set systemEauChaudeId
     *
     * @param integer $systemEauChaudeId
     * @return Annonce
     */
    public function setSystemEauChaudeId($systemEauChaudeId)
    {
        $this->systemEauChaudeId = $systemEauChaudeId;

        return $this;
    }

    /**
     * Get systemEauChaudeId
     *
     * @return integer 
     */
    public function getSystemEauChaudeId()
    {
        return $this->systemEauChaudeId;
    }

    /**
     * Set sloganId
     *
     * @param integer $sloganId
     * @return Annonce
     */
    public function setSloganId($sloganId)
    {
        $this->sloganId = $sloganId;

        return $this;
    }

    /**
     * Get sloganId
     *
     * @return integer 
     */
    public function getSloganId()
    {
        return $this->sloganId;
    }

    /**
     * Set surfaceHabitableAnnonce
     *
     * @param string $surfaceHabitableAnnonce
     * @return Annonce
     */
    public function setSurfaceHabitableAnnonce($surfaceHabitableAnnonce)
    {
        $this->surfaceHabitableAnnonce = $surfaceHabitableAnnonce;

        return $this;
    }

    /**
     * Get surfaceHabitableAnnonce
     *
     * @return string 
     */
    public function getSurfaceHabitableAnnonce()
    {
        return $this->surfaceHabitableAnnonce;
    }

    /**
     * Set surfaceTerrainAnnone
     *
     * @param string $surfaceTerrainAnnone
     * @return Annonce
     */
    public function setSurfaceTerrainAnnone($surfaceTerrainAnnone)
    {
        $this->surfaceTerrainAnnone = $surfaceTerrainAnnone;

        return $this;
    }

    /**
     * Get surfaceTerrainAnnone
     *
     * @return string 
     */
    public function getSurfaceTerrainAnnone()
    {
        return $this->surfaceTerrainAnnone;
    }

    /**
     * Set etatBienId
     *
     * @param integer $etatBienId
     * @return Annonce
     */
    public function setEtatBienId($etatBienId)
    {
        $this->etatBienId = $etatBienId;

        return $this;
    }

    /**
     * Get etatBienId
     *
     * @return integer 
     */
    public function getEtatBienId()
    {
        return $this->etatBienId;
    }

    /**
     * Set etatAgenceId
     *
     * @param integer $etatAgenceId
     * @return Annonce
     */
    public function setEtatAgenceId($etatAgenceId)
    {
        $this->etatAgenceId = $etatAgenceId;

        return $this;
    }

    /**
     * Get etatAgenceId
     *
     * @return integer 
     */
    public function getEtatAgenceId()
    {
        return $this->etatAgenceId;
    }

    /**
     * Set annonceNatureCharge
     *
     * @param string $annonceNatureCharge
     * @return Annonce
     */
    public function setAnnonceNatureCharge($annonceNatureCharge)
    {
        $this->annonceNatureCharge = $annonceNatureCharge;

        return $this;
    }

    /**
     * Get annonceNatureCharge
     *
     * @return string 
     */
    public function getAnnonceNatureCharge()
    {
        return $this->annonceNatureCharge;
    }

    /**
     * Set dpe
     *
     * @param string $dpe
     * @return Annonce
     */
    public function setDpe($dpe)
    {
        $this->dpe = $dpe;

        return $this;
    }

    /**
     * Get dpe
     *
     * @return string 
     */
    public function getDpe()
    {
        return $this->dpe;
    }

    /**
     * Set ges
     *
     * @param string $ges
     * @return Annonce
     */
    public function setGes($ges)
    {
        $this->ges = $ges;

        return $this;
    }

    /**
     * Get ges
     *
     * @return string 
     */
    public function getGes()
    {
        return $this->ges;
    }

    /**
     * Set modechauffageId
     *
     * @param integer $modechauffageId
     * @return Annonce
     */
    public function setModechauffageId($modechauffageId)
    {
        $this->modechauffageId = $modechauffageId;

        return $this;
    }

    /**
     * Get modechauffageId
     *
     * @return integer 
     */
    public function getModechauffageId()
    {
        return $this->modechauffageId;
    }

    /**
     * Set etatInterieurBienId
     *
     * @param integer $etatInterieurBienId
     * @return Annonce
     */
    public function setEtatInterieurBienId($etatInterieurBienId)
    {
        $this->etatInterieurBienId = $etatInterieurBienId;

        return $this;
    }

    /**
     * Get etatInterieurBienId
     *
     * @return integer 
     */
    public function getEtatInterieurBienId()
    {
        return $this->etatInterieurBienId;
    }

    /**
     * Set dpeValeur
     *
     * @param string $dpeValeur
     * @return Annonce
     */
    public function setDpeValeur($dpeValeur)
    {
        $this->dpeValeur = $dpeValeur;

        return $this;
    }

    /**
     * Get dpeValeur
     *
     * @return string 
     */
    public function getDpeValeur()
    {
        return $this->dpeValeur;
    }

    /**
     * Set gesValeur
     *
     * @param string $gesValeur
     * @return Annonce
     */
    public function setGesValeur($gesValeur)
    {
        $this->gesValeur = $gesValeur;

        return $this;
    }

    /**
     * Get gesValeur
     *
     * @return string 
     */
    public function getGesValeur()
    {
        return $this->gesValeur;
    }

    /**
     * Set sousTypeBienId
     *
     * @param integer $sousTypeBienId
     * @return Annonce
     */
    public function setSousTypeBienId($sousTypeBienId)
    {
        $this->sousTypeBienId = $sousTypeBienId;

        return $this;
    }

    /**
     * Get sousTypeBienId
     *
     * @return integer 
     */
    public function getSousTypeBienId()
    {
        return $this->sousTypeBienId;
    }

    /**
     * Set nbChambre
     *
     * @param string $nbChambre
     * @return Annonce
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return string 
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set prixMetreCarre
     *
     * @param string $prixMetreCarre
     * @return Annonce
     */
    public function setPrixMetreCarre($prixMetreCarre)
    {
        $this->prixMetreCarre = $prixMetreCarre;

        return $this;
    }

    /**
     * Get prixMetreCarre
     *
     * @return string 
     */
    public function getPrixMetreCarre()
    {
        return $this->prixMetreCarre;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Annonce
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set exclusivite
     *
     * @param string $exclusivite
     * @return Annonce
     */
    public function setExclusivite($exclusivite)
    {
        $this->exclusivite = $exclusivite;

        return $this;
    }

    /**
     * Get exclusivite
     *
     * @return string 
     */
    public function getExclusivite()
    {
        return $this->exclusivite;
    }
}
