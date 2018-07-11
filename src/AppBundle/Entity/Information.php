<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 *
 * @ORM\Table(name="information")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InformationRepository")
 */
class Information
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_insee", type="string", length=255)
     */
    private $codeInsee;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid_x_etrs3035", type="string", length=255)
     */
    private $centroidXEtrs3035;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid_y_etrs3035", type="string", length=255)
     */
    private $centroidYEtrs3035;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INDICE_SUPERVISE", type="datetime")
     */
    private $dATEINDICESUPERVISE;

    /**
     * @var string
     *
     * @ORM\Column(name="ECHEANCE", type="string", length=255)
     */
    private $eCHEANCE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ECHEANCE", type="datetime")
     */
<<<<<<< HEAD
    private $dateEcheance;
    
    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_QUALITE_AIR", type="string", length=255, nullable=false)
     */
    private $libelleQualiteAir;
=======
    private $dATEECHEANCE;

>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="COULEUR_CARTE_GE", type="string", length=255, nullable=false)
     */
    private $couleurCarteGe;
=======
     * @ORM\Column(name="LIBELLE_QUALITE_AIR", type="string", length=255)
     */
    private $lIBELLEQUALITEAIR;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="LIBELLE_POLLUANT_RESPONSABLE", type="string", length=255, nullable=false)
     */
    private $libellePolluantResponsable;

=======
     * @ORM\Column(name="COULEUR_CARTE_GE", type="string", length=255)
     */
    private $cOULEURCARTEGE;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
=======
     * @ORM\Column(name="LIBELLE_POLLUANT_RESPONSABLE", type="string", length=255)
     */
    private $lIBELLEPOLLUANTRESPONSABLE;

>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0



    /**
<<<<<<< HEAD
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

=======
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeInsee.
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
     * Get codeInsee.
     *
     * @return string
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * Set commune.
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
     * Get commune.
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set centroidXEtrs3035.
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
     * Get centroidXEtrs3035.
     *
     * @return string
     */
    public function getCentroidXEtrs3035()
    {
        return $this->centroidXEtrs3035;
    }

    /**
     * Set centroidYEtrs3035.
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
     * Get centroidYEtrs3035.
     *
     * @return string
     */
    public function getCentroidYEtrs3035()
    {
        return $this->centroidYEtrs3035;
    }

    /**
     * Set dATEINDICESUPERVISE.
     *
     * @param \DateTime $dATEINDICESUPERVISE
     *
     * @return Information
     */
    public function setDATEINDICESUPERVISE($dATEINDICESUPERVISE)
    {
        $this->dATEINDICESUPERVISE = $dATEINDICESUPERVISE;

>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0
        return $this;
    }

    /**
<<<<<<< HEAD
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

=======
     * Get dATEINDICESUPERVISE.
     *
     * @return \DateTime
     */
    public function getDATEINDICESUPERVISE()
    {
        return $this->dATEINDICESUPERVISE;
    }

    /**
     * Set eCHEANCE.
     *
     * @param string $eCHEANCE
     *
     * @return Information
     */
    public function setECHEANCE($eCHEANCE)
    {
        $this->eCHEANCE = $eCHEANCE;

        return $this;
    }

    /**
     * Get eCHEANCE.
     *
     * @return string
     */
    public function getECHEANCE()
    {
        return $this->eCHEANCE;
    }

    /**
     * Set dATEECHEANCE.
     *
     * @param \DateTime $dATEECHEANCE
     *
     * @return Information
     */
    public function setDATEECHEANCE($dATEECHEANCE)
    {
        $this->dATEECHEANCE = $dATEECHEANCE;

>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0
        return $this;
    }

    /**
<<<<<<< HEAD
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
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
=======
     * Get dATEECHEANCE.
     *
     * @return \DateTime
     */
    public function getDATEECHEANCE()
    {
        return $this->dATEECHEANCE;
    }

    /**
     * Set lIBELLEQUALITEAIR.
     *
     * @param string $lIBELLEQUALITEAIR
     *
     * @return Information
     */
    public function setLIBELLEQUALITEAIR($lIBELLEQUALITEAIR)
    {
        $this->lIBELLEQUALITEAIR = $lIBELLEQUALITEAIR;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
     * Get lIBELLEQUALITEAIR.
     *
     * @return string
     */
    public function getLIBELLEQUALITEAIR()
    {
        return $this->lIBELLEQUALITEAIR;
    }

    /**
     * Set cOULEURCARTEGE.
     *
     * @param string $cOULEURCARTEGE
     *
     * @return Information
     */
    public function setCOULEURCARTEGE($cOULEURCARTEGE)
    {
        $this->cOULEURCARTEGE = $cOULEURCARTEGE;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
     * Get cOULEURCARTEGE.
     *
     * @return string
     */
    public function getCOULEURCARTEGE()
    {
        return $this->cOULEURCARTEGE;
    }

    /**
     * Set lIBELLEPOLLUANTRESPONSABLE.
     *
     * @param string $lIBELLEPOLLUANTRESPONSABLE
     *
     * @return Information
     */
    public function setLIBELLEPOLLUANTRESPONSABLE($lIBELLEPOLLUANTRESPONSABLE)
    {
        $this->lIBELLEPOLLUANTRESPONSABLE = $lIBELLEPOLLUANTRESPONSABLE;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get libellePolluantResponsable
     *
     * @return string
     */
    public function getLibellePolluantResponsable()
    {
        return $this->libellePolluantResponsable;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
=======
     * Get lIBELLEPOLLUANTRESPONSABLE.
     *
     * @return string
     */
    public function getLIBELLEPOLLUANTRESPONSABLE()
    {
        return $this->lIBELLEPOLLUANTRESPONSABLE;
>>>>>>> c582ef8e0800d32abbbd57a416bc5500b9d778a0
    }
}
