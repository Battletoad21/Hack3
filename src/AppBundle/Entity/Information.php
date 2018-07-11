<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 *
 * @ORM\Table(name="information")
 * @ORM\Entity
 */
class Information
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_insee", type="string", length=255, nullable=false)
     */
    private $codeInsee;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255, nullable=false)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid_x_etrs3035", type="string", length=255, nullable=false)
     */
    private $centroidXEtrs3035;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid_y_etrs3035", type="string", length=255, nullable=false)
     */
    private $centroidYEtrs3035;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INDICE_SUPERVISE", type="datetime", nullable=false)
     */
    private $dateIndiceSupervise;

    /**
     * @var string
     *
     * @ORM\Column(name="ECHEANCE", type="string", length=255, nullable=false)
     */
    private $echeance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="datetime", nullable=false)
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="VALEUR_SSINDICE_NO2", type="string", length=255, nullable=false)
     */
    private $valeurSsindiceNo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_O3", type="integer", nullable=false)
     */
    private $valeurSsindiceO3;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALEUR_SSINDICE_PM10", type="integer", nullable=false)
     */
    private $valeurSsindicePm10;

    /**
     * @var string
     *
     * @ORM\Column(name="VALEUR_SSINDICE_SO2", type="string", length=255, nullable=false)
     */
    private $valeurSsindiceSo2;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_INDICE", type="string", length=255, nullable=false)
     */
    private $libelleIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_FAMILLE_INDICE", type="string", length=255, nullable=false)
     */
    private $libelleFamilleIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_QUALITE_AIR", type="string", length=255, nullable=false)
     */
    private $libelleQualiteAir;

    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_CARTE_GE", type="string", length=255, nullable=false)
     */
    private $couleurCarteGe;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_POLLUANT_RESPONSABLE", type="string", length=255, nullable=false)
     */
    private $libellePolluantResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTATION_POLLUANT_RESPONSABLE", type="string", length=255, nullable=false)
     */
    private $notationPolluantResponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codeInsee
     *
     * @param string $codeInsee
     *
     * @return Information
     */
    public function setCodeInsee($codeInsee)
    {
        $this->codeInsee = $codeInsee;

        return $this;
    }

    /**
     * Get codeInsee
     *
     * @return string
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Information
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set centroidXEtrs3035
     *
     * @param string $centroidXEtrs3035
     *
     * @return Information
     */
    public function setCentroidXEtrs3035($centroidXEtrs3035)
    {
        $this->centroidXEtrs3035 = $centroidXEtrs3035;

        return $this;
    }

    /**
     * Get centroidXEtrs3035
     *
     * @return string
     */
    public function getCentroidXEtrs3035()
    {
        return $this->centroidXEtrs3035;
    }

    /**
     * Set centroidYEtrs3035
     *
     * @param string $centroidYEtrs3035
     *
     * @return Information
     */
    public function setCentroidYEtrs3035($centroidYEtrs3035)
    {
        $this->centroidYEtrs3035 = $centroidYEtrs3035;

        return $this;
    }

    /**
     * Get centroidYEtrs3035
     *
     * @return string
     */
    public function getCentroidYEtrs3035()
    {
        return $this->centroidYEtrs3035;
    }

    /**
     * Set dateIndiceSupervise
     *
     * @param \DateTime $dateIndiceSupervise
     *
     * @return Information
     */
    public function setDateIndiceSupervise($dateIndiceSupervise)
    {
        $this->dateIndiceSupervise = $dateIndiceSupervise;

        return $this;
    }

    /**
     * Get dateIndiceSupervise
     *
     * @return \DateTime
     */
    public function getDateIndiceSupervise()
    {
        return $this->dateIndiceSupervise;
    }

    /**
     * Set echeance
     *
     * @param string $echeance
     *
     * @return Information
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * Get echeance
     *
     * @return string
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Information
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set valeurSsindiceNo2
     *
     * @param string $valeurSsindiceNo2
     *
     * @return Information
     */
    public function setValeurSsindiceNo2($valeurSsindiceNo2)
    {
        $this->valeurSsindiceNo2 = $valeurSsindiceNo2;

        return $this;
    }

    /**
     * Get valeurSsindiceNo2
     *
     * @return string
     */
    public function getValeurSsindiceNo2()
    {
        return $this->valeurSsindiceNo2;
    }

    /**
     * Set valeurSsindiceO3
     *
     * @param integer $valeurSsindiceO3
     *
     * @return Information
     */
    public function setValeurSsindiceO3($valeurSsindiceO3)
    {
        $this->valeurSsindiceO3 = $valeurSsindiceO3;

        return $this;
    }

    /**
     * Get valeurSsindiceO3
     *
     * @return integer
     */
    public function getValeurSsindiceO3()
    {
        return $this->valeurSsindiceO3;
    }

    /**
     * Set valeurSsindicePm10
     *
     * @param integer $valeurSsindicePm10
     *
     * @return Information
     */
    public function setValeurSsindicePm10($valeurSsindicePm10)
    {
        $this->valeurSsindicePm10 = $valeurSsindicePm10;

        return $this;
    }

    /**
     * Get valeurSsindicePm10
     *
     * @return integer
     */
    public function getValeurSsindicePm10()
    {
        return $this->valeurSsindicePm10;
    }

    /**
     * Set valeurSsindiceSo2
     *
     * @param string $valeurSsindiceSo2
     *
     * @return Information
     */
    public function setValeurSsindiceSo2($valeurSsindiceSo2)
    {
        $this->valeurSsindiceSo2 = $valeurSsindiceSo2;

        return $this;
    }

    /**
     * Get valeurSsindiceSo2
     *
     * @return string
     */
    public function getValeurSsindiceSo2()
    {
        return $this->valeurSsindiceSo2;
    }

    /**
     * Set libelleIndice
     *
     * @param string $libelleIndice
     *
     * @return Information
     */
    public function setLibelleIndice($libelleIndice)
    {
        $this->libelleIndice = $libelleIndice;

        return $this;
    }

    /**
     * Get libelleIndice
     *
     * @return string
     */
    public function getLibelleIndice()
    {
        return $this->libelleIndice;
    }

    /**
     * Set libelleFamilleIndice
     *
     * @param string $libelleFamilleIndice
     *
     * @return Information
     */
    public function setLibelleFamilleIndice($libelleFamilleIndice)
    {
        $this->libelleFamilleIndice = $libelleFamilleIndice;

        return $this;
    }

    /**
     * Get libelleFamilleIndice
     *
     * @return string
     */
    public function getLibelleFamilleIndice()
    {
        return $this->libelleFamilleIndice;
    }

    /**
     * Set libelleQualiteAir
     *
     * @param string $libelleQualiteAir
     *
     * @return Information
     */
    public function setLibelleQualiteAir($libelleQualiteAir)
    {
        $this->libelleQualiteAir = $libelleQualiteAir;

        return $this;
    }

    /**
     * Get libelleQualiteAir
     *
     * @return string
     */
    public function getLibelleQualiteAir()
    {
        return $this->libelleQualiteAir;
    }

    /**
     * Set couleurCarteGe
     *
     * @param string $couleurCarteGe
     *
     * @return Information
     */
    public function setCouleurCarteGe($couleurCarteGe)
    {
        $this->couleurCarteGe = $couleurCarteGe;

        return $this;
    }

    /**
     * Get couleurCarteGe
     *
     * @return string
     */
    public function getCouleurCarteGe()
    {
        return $this->couleurCarteGe;
    }

    /**
     * Set libellePolluantResponsable
     *
     * @param string $libellePolluantResponsable
     *
     * @return Information
     */
    public function setLibellePolluantResponsable($libellePolluantResponsable)
    {
        $this->libellePolluantResponsable = $libellePolluantResponsable;

        return $this;
    }

    /**
     * Get libellePolluantResponsable
     *
     * @return string
     */
    public function getLibellePolluantResponsable()
    {
        return $this->libellePolluantResponsable;
    }

    /**
     * Set notationPolluantResponsable
     *
     * @param string $notationPolluantResponsable
     *
     * @return Information
     */
    public function setNotationPolluantResponsable($notationPolluantResponsable)
    {
        $this->notationPolluantResponsable = $notationPolluantResponsable;

        return $this;
    }

    /**
     * Get notationPolluantResponsable
     *
     * @return string
     */
    public function getNotationPolluantResponsable()
    {
        return $this->notationPolluantResponsable;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
