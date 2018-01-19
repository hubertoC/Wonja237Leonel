<?php

namespace HZ\Wonja237Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestSite
 *
 * @ORM\Table(name="test_site")
 * @ORM\Entity(repositoryClass="HZ\Wonja237Bundle\Repository\TestSiteRepository")
 */
class TestSite
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=false)
     */
    private $profession;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexe", type="string" , nullable=false)
     */
    private $sexe;

    /**
     * @var bool
     *
     * @ORM\Column(name="ternaminal", type="string" , nullable=false)
     */
    private $ternaminal;

    /**
     * @var bool
     *
     * @ORM\Column(name="bonneNavigation", type="string" , nullable=false)
     */
    private $bonneNavigation;

    /**
     * @var bool
     *
     * @ORM\Column(name="connaisTuInternet", type="string" , nullable=false)
     */
    private $connaisTuInternet;

    /**
     * @var string
     *
     * @ORM\Column(name="sitePrefere", type="string", length=255, nullable=true)
     */
    private $sitePrefere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourquoiSitePreferer", type="string", length=255, nullable=true)
     */
    private $pourquoiSitePreferer;

    /**
     * @var string
     *
     * @ORM\Column(name="attractionPageAcceuil", type="string", length=255, nullable=false)
     */
    private $attractionPageAcceuil;



    /**
     * @var bool
     *
     * @ORM\Column(name="barreDeRescherche", type="string", nullable=false)
     */
    private $barreDeRescherche;

    /**
     * @var string
     *
     * @ORM\Column(name="ameliorationBarreDeRecherche", type="string", length=255, nullable=true)
     */
    private $ameliorationBarreDeRecherche;

    /**
     * @var string
     *
     * @ORM\Column(name="inscriptionProzess", type="string", length=255, nullable=false)
     */
    private $inscriptionProzess;

    /**
     * @var bool
     *
     * @ORM\Column(name="inscriptionOK", type="string", nullable=false)
     */
    private $inscriptionOK;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inscriptionPourQuoi", type="string", length=255, nullable=true, nullable=true)
     */
    private $inscriptionPourQuoi;

    /**
     * @var string
     *
     * @ORM\Column(name="reservationProzess", type="string", length=255, nullable=false)
     */
    private $reservationProzess;

    /**
     * @var bool
     *
     * @ORM\Column(name="reservationOK", type="string", nullable=false)
     */
    private $reservationOK;

    /**
     * @var string
     *
     * @ORM\Column(name="reservationPourQuoi", type="string", length=255, nullable=true)
     */
    private $reservationPourQuoi;

    /**
     * @var bool
     *
     * @ORM\Column(name="acceCategorieOk", type="string", nullable=false)
     */
    private $acceCategorieOk;

    /**
     * @var string
     *
     * @ORM\Column(name="acceCategoriePourQuoi", type="string", length=255, nullable=true)
     */
    private $acceCategoriePourQuoi;

    /**
     * @var string
     *
     * @ORM\Column(name="presentationCategorie", type="string", length=255, nullable=false)
     */
    private $presentationCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="ameliorationCategorie", type="string", length=255, nullable=true)
     */
    private $ameliorationCategorie;





    /**
     * @var string
     *
     * @ORM\Column(name="publiciteRemarque", type="string", length=255, nullable=false)
     */
    private $publiciteRemarque;

    /**
     * @var string
     *
     * @ORM\Column(name="ameliorationPublicite", type="string", length=255, nullable=true)
     */
    private $ameliorationPublicite;

    /**
     * @var bool
     *
     * @ORM\Column(name="partenaireUtileOK", type="string", nullable=false)
     */
    private $partenaireUtileOK;

    /**
     * @var string
     *
     * @ORM\Column(name="partenaiQuePensezVous", type="string", length=255, nullable=true)
     */
    private $partenaiQuePensezVous;

    /**
     * @var bool
     *
     * @ORM\Column(name="testNewsLetter", type="string", nullable=false)
     */
    private $testNewsLetter;

    /**
     * @var bool
     *
     * @ORM\Column(name="testContact", type="string", nullable=false)
     */
    private $testContact;

    /**
     * @var string
     *
     * @ORM\Column(name="reponseParamilOK", type="string", length=255, nullable=false)
     */
    private $reponseParamilOK;

    /**
     * @var bool
     *
     * @ORM\Column(name="reseauOk", type="string", nullable=false)
     */
    private $reseauOk;

    /**
     * @var string
     *
     * @ORM\Column(name="ameliorationGlobale", type="string", length=255, nullable=true)
     */
    private $ameliorationGlobale;

    /**
     * @var int
     *
     * @ORM\Column(name="structureDuContenu", type="integer", nullable=false)
     */
    private $structureDuContenu;

    /**
     * @var int
     *
     * @ORM\Column(name="pertinenceContenu", type="integer", nullable=false)
     */
    private $pertinenceContenu;

    /**
     * @var int
     *
     * @ORM\Column(name="design", type="integer", nullable=false)
     */
    private $design;

    /**
     * @var int
     *
     * @ORM\Column(name="ergonomie", type="integer", nullable=false)
     */
    private $ergonomie;

    /**
     * @var int
     *
     * @ORM\Column(name="simplicte", type="integer", nullable=false)
     */
    private $simplicte;

    /**
     * @var int
     *
     * @ORM\Column(name="intuitivite", type="integer", nullable=false)
     */
    private $intuitivite;

    /**
     * @var int
     *
     * @ORM\Column(name="originalite", type="integer", nullable=false)
     */
    private $originalite;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return TestSite
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set profession.
     *
     * @param string|null $profession
     *
     * @return TestSite
     */
    public function setProfession($profession = null)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession.
     *
     * @return string|null
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set sexe.
     *
     * @param bool $sexe
     *
     * @return TestSite
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe.
     *
     * @return bool
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set ternaminal.
     *
     * @param bool $ternaminal
     *
     * @return TestSite
     */
    public function setTernaminal($ternaminal)
    {
        $this->ternaminal = $ternaminal;

        return $this;
    }

    /**
     * Get ternaminal.
     *
     * @return bool
     */
    public function getTernaminal()
    {
        return $this->ternaminal;
    }

    /**
     * Set bonneNavigation.
     *
     * @param bool $bonneNavigation
     *
     * @return TestSite
     */
    public function setBonneNavigation($bonneNavigation)
    {
        $this->bonneNavigation = $bonneNavigation;

        return $this;
    }

    /**
     * Get bonneNavigation.
     *
     * @return bool
     */
    public function getBonneNavigation()
    {
        return $this->bonneNavigation;
    }

    /**
     * Set connaisTuInternet.
     *
     * @param bool $connaisTuInternet
     *
     * @return TestSite
     */
    public function setConnaisTuInternet($connaisTuInternet)
    {
        $this->connaisTuInternet = $connaisTuInternet;

        return $this;
    }

    /**
     * Get connaisTuInternet.
     *
     * @return bool
     */
    public function getConnaisTuInternet()
    {
        return $this->connaisTuInternet;
    }

    /**
     * Set sitePrefere.
     *
     * @param string $sitePrefere
     *
     * @return TestSite
     */
    public function setSitePrefere($sitePrefere)
    {
        $this->sitePrefere = $sitePrefere;

        return $this;
    }

    /**
     * Get sitePrefere.
     *
     * @return string
     */
    public function getSitePrefere()
    {
        return $this->sitePrefere;
    }

    /**
     * Set pourquoiSitePreferer.
     *
     * @param string|null $pourquoiSitePreferer
     *
     * @return TestSite
     */
    public function setPourquoiSitePreferer($pourquoiSitePreferer = null)
    {
        $this->pourquoiSitePreferer = $pourquoiSitePreferer;

        return $this;
    }

    /**
     * Get pourquoiSitePreferer.
     *
     * @return string|null
     */
    public function getPourquoiSitePreferer()
    {
        return $this->pourquoiSitePreferer;
    }

    /**
     * Set attractionPageAcceuil.
     *
     * @param string $attractionPageAcceuil
     *
     * @return TestSite
     */
    public function setAttractionPageAcceuil($attractionPageAcceuil)
    {
        $this->attractionPageAcceuil = $attractionPageAcceuil;

        return $this;
    }

    /**
     * Get attractionPageAcceuil.
     *
     * @return string
     */
    public function getAttractionPageAcceuil()
    {
        return $this->attractionPageAcceuil;
    }





    /**
     * Set barreDeRescherche.
     *
     * @param bool $barreDeRescherche
     *
     * @return TestSite
     */
    public function setBarreDeRescherche($barreDeRescherche)
    {
        $this->barreDeRescherche = $barreDeRescherche;

        return $this;
    }

    /**
     * Get barreDeRescherche.
     *
     * @return bool
     */
    public function getBarreDeRescherche()
    {
        return $this->barreDeRescherche;
    }

    /**
     * Set ameliorationBarreDeRecherche.
     *
     * @param string $ameliorationBarreDeRecherche
     *
     * @return TestSite
     */
    public function setAmeliorationBarreDeRecherche($ameliorationBarreDeRecherche)
    {
        $this->ameliorationBarreDeRecherche = $ameliorationBarreDeRecherche;

        return $this;
    }

    /**
     * Get ameliorationBarreDeRecherche.
     *
     * @return string
     */
    public function getAmeliorationBarreDeRecherche()
    {
        return $this->ameliorationBarreDeRecherche;
    }

    /**
     * Set inscriptionProzess.
     *
     * @param string $inscriptionProzess
     *
     * @return TestSite
     */
    public function setInscriptionProzess($inscriptionProzess)
    {
        $this->inscriptionProzess = $inscriptionProzess;

        return $this;
    }

    /**
     * Get inscriptionProzess.
     *
     * @return string
     */
    public function getInscriptionProzess()
    {
        return $this->inscriptionProzess;
    }

    /**
     * Set inscriptionOK.
     *
     * @param bool $inscriptionOK
     *
     * @return TestSite
     */
    public function setInscriptionOK($inscriptionOK)
    {
        $this->inscriptionOK = $inscriptionOK;

        return $this;
    }

    /**
     * Get inscriptionOK.
     *
     * @return bool
     */
    public function getInscriptionOK()
    {
        return $this->inscriptionOK;
    }

    /**
     * Set inscriptionPourQuoi.
     *
     * @param string|null $inscriptionPourQuoi
     *
     * @return TestSite
     */
    public function setInscriptionPourQuoi($inscriptionPourQuoi = null)
    {
        $this->inscriptionPourQuoi = $inscriptionPourQuoi;

        return $this;
    }

    /**
     * Get inscriptionPourQuoi.
     *
     * @return string|null
     */
    public function getInscriptionPourQuoi()
    {
        return $this->inscriptionPourQuoi;
    }

    /**
     * Set reservationProzess.
     *
     * @param string $reservationProzess
     *
     * @return TestSite
     */
    public function setReservationProzess($reservationProzess)
    {
        $this->reservationProzess = $reservationProzess;

        return $this;
    }

    /**
     * Get reservationProzess.
     *
     * @return string
     */
    public function getReservationProzess()
    {
        return $this->reservationProzess;
    }

    /**
     * Set reservationOK.
     *
     * @param bool $reservationOK
     *
     * @return TestSite
     */
    public function setReservationOK($reservationOK)
    {
        $this->reservationOK = $reservationOK;

        return $this;
    }

    /**
     * Get reservationOK.
     *
     * @return bool
     */
    public function getReservationOK()
    {
        return $this->reservationOK;
    }

    /**
     * Set reservationPourQuoi.
     *
     * @param string $reservationPourQuoi
     *
     * @return TestSite
     */
    public function setReservationPourQuoi($reservationPourQuoi)
    {
        $this->reservationPourQuoi = $reservationPourQuoi;

        return $this;
    }

    /**
     * Get reservationPourQuoi.
     *
     * @return string
     */
    public function getReservationPourQuoi()
    {
        return $this->reservationPourQuoi;
    }

    /**
     * Set acceCategorieOk.
     *
     * @param bool $acceCategorieOk
     *
     * @return TestSite
     */
    public function setAcceCategorieOk($acceCategorieOk)
    {
        $this->acceCategorieOk = $acceCategorieOk;

        return $this;
    }

    /**
     * Get acceCategorieOk.
     *
     * @return bool
     */
    public function getAcceCategorieOk()
    {
        return $this->acceCategorieOk;
    }

    /**
     * Set acceCategoriePourQuoi.
     *
     * @param string $acceCategoriePourQuoi
     *
     * @return TestSite
     */
    public function setAcceCategoriePourQuoi($acceCategoriePourQuoi)
    {
        $this->acceCategoriePourQuoi = $acceCategoriePourQuoi;

        return $this;
    }

    /**
     * Get acceCategoriePourQuoi.
     *
     * @return string
     */
    public function getAcceCategoriePourQuoi()
    {
        return $this->acceCategoriePourQuoi;
    }

    /**
     * Set presentationCategorie.
     *
     * @param string $presentationCategorie
     *
     * @return TestSite
     */
    public function setPresentationCategorie($presentationCategorie)
    {
        $this->presentationCategorie = $presentationCategorie;

        return $this;
    }

    /**
     * Get presentationCategorie.
     *
     * @return string
     */
    public function getPresentationCategorie()
    {
        return $this->presentationCategorie;
    }

    /**
     * Set ameliorationCategorie.
     *
     * @param string $ameliorationCategorie
     *
     * @return TestSite
     */
    public function setAmeliorationCategorie($ameliorationCategorie)
    {
        $this->ameliorationCategorie = $ameliorationCategorie;

        return $this;
    }

    /**
     * Get ameliorationCategorie.
     *
     * @return string
     */
    public function getAmeliorationCategorie()
    {
        return $this->ameliorationCategorie;
    }





    /**
     * Set publiciteRemarque.
     *
     * @param string $publiciteRemarque
     *
     * @return TestSite
     */
    public function setPubliciteRemarque($publiciteRemarque)
    {
        $this->publiciteRemarque = $publiciteRemarque;

        return $this;
    }

    /**
     * Get publiciteRemarque.
     *
     * @return string
     */
    public function getPubliciteRemarque()
    {
        return $this->publiciteRemarque;
    }

    /**
     * Set ameliorationPublicite.
     *
     * @param string $ameliorationPublicite
     *
     * @return TestSite
     */
    public function setAmeliorationPublicite($ameliorationPublicite)
    {
        $this->ameliorationPublicite = $ameliorationPublicite;

        return $this;
    }

    /**
     * Get ameliorationPublicite.
     *
     * @return string
     */
    public function getAmeliorationPublicite()
    {
        return $this->ameliorationPublicite;
    }

    /**
     * Set partenaireUtileOK.
     *
     * @param bool $partenaireUtileOK
     *
     * @return TestSite
     */
    public function setPartenaireUtileOK($partenaireUtileOK)
    {
        $this->partenaireUtileOK = $partenaireUtileOK;

        return $this;
    }

    /**
     * Get partenaireUtileOK.
     *
     * @return bool
     */
    public function getPartenaireUtileOK()
    {
        return $this->partenaireUtileOK;
    }

    /**
     * Set partenaiQuePensezVous.
     *
     * @param string $partenaiQuePensezVous
     *
     * @return TestSite
     */
    public function setPartenaiQuePensezVous($partenaiQuePensezVous)
    {
        $this->partenaiQuePensezVous = $partenaiQuePensezVous;

        return $this;
    }

    /**
     * Get partenaiQuePensezVous.
     *
     * @return string
     */
    public function getPartenaiQuePensezVous()
    {
        return $this->partenaiQuePensezVous;
    }

    /**
     * Set testNewsLetter.
     *
     * @param bool $testNewsLetter
     *
     * @return TestSite
     */
    public function setTestNewsLetter($testNewsLetter)
    {
        $this->testNewsLetter = $testNewsLetter;

        return $this;
    }

    /**
     * Get testNewsLetter.
     *
     * @return bool
     */
    public function getTestNewsLetter()
    {
        return $this->testNewsLetter;
    }

    /**
     * Set testContact.
     *
     * @param bool $testContact
     *
     * @return TestSite
     */
    public function setTestContact($testContact)
    {
        $this->testContact = $testContact;

        return $this;
    }

    /**
     * Get testContact.
     *
     * @return bool
     */
    public function getTestContact()
    {
        return $this->testContact;
    }

    /**
     * Set reponseParamilOK.
     *
     * @param string $reponseParamilOK
     *
     * @return TestSite
     */
    public function setReponseParamilOK($reponseParamilOK)
    {
        $this->reponseParamilOK = $reponseParamilOK;

        return $this;
    }

    /**
     * Get reponseParamilOK.
     *
     * @return string
     */
    public function getReponseParamilOK()
    {
        return $this->reponseParamilOK;
    }

    /**
     * Set reseauOk.
     *
     * @param bool $reseauOk
     *
     * @return TestSite
     */
    public function setReseauOk($reseauOk)
    {
        $this->reseauOk = $reseauOk;

        return $this;
    }

    /**
     * Get reseauOk.
     *
     * @return bool
     */
    public function getReseauOk()
    {
        return $this->reseauOk;
    }

    /**
     * Set ameliorationGlobale.
     *
     * @param string $ameliorationGlobale
     *
     * @return TestSite
     */
    public function setAmeliorationGlobale($ameliorationGlobale)
    {
        $this->ameliorationGlobale = $ameliorationGlobale;

        return $this;
    }

    /**
     * Get ameliorationGlobale.
     *
     * @return string
     */
    public function getAmeliorationGlobale()
    {
        return $this->ameliorationGlobale;
    }

    /**
     * Set structureDuContenu.
     *
     * @param int $structureDuContenu
     *
     * @return TestSite
     */
    public function setStructureDuContenu($structureDuContenu)
    {
        $this->structureDuContenu = $structureDuContenu;

        return $this;
    }

    /**
     * Get structureDuContenu.
     *
     * @return int
     */
    public function getStructureDuContenu()
    {
        return $this->structureDuContenu;
    }

    /**
     * Set pertinenceContenu.
     *
     * @param int $pertinenceContenu
     *
     * @return TestSite
     */
    public function setPertinenceContenu($pertinenceContenu)
    {
        $this->pertinenceContenu = $pertinenceContenu;

        return $this;
    }

    /**
     * Get pertinenceContenu.
     *
     * @return int
     */
    public function getPertinenceContenu()
    {
        return $this->pertinenceContenu;
    }

    /**
     * Set design.
     *
     * @param int $design
     *
     * @return TestSite
     */
    public function setDesign($design)
    {
        $this->design = $design;

        return $this;
    }

    /**
     * Get design.
     *
     * @return int
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set ergonomie.
     *
     * @param int $ergonomie
     *
     * @return TestSite
     */
    public function setErgonomie($ergonomie)
    {
        $this->ergonomie = $ergonomie;

        return $this;
    }

    /**
     * Get ergonomie.
     *
     * @return int
     */
    public function getErgonomie()
    {
        return $this->ergonomie;
    }

    /**
     * Set simplicte.
     *
     * @param int $simplicte
     *
     * @return TestSite
     */
    public function setSimplicte($simplicte)
    {
        $this->simplicte = $simplicte;

        return $this;
    }

    /**
     * Get simplicte.
     *
     * @return int
     */
    public function getSimplicte()
    {
        return $this->simplicte;
    }

    /**
     * Set intuitivite.
     *
     * @param int $intuitivite
     *
     * @return TestSite
     */
    public function setIntuitivite($intuitivite)
    {
        $this->intuitivite = $intuitivite;

        return $this;
    }

    /**
     * Get intuitivite.
     *
     * @return int
     */
    public function getIntuitivite()
    {
        return $this->intuitivite;
    }

    /**
     * Set originalite.
     *
     * @param int $originalite
     *
     * @return TestSite
     */
    public function setOriginalite($originalite)
    {
        $this->originalite = $originalite;

        return $this;
    }

    /**
     * Get originalite.
     *
     * @return int
     */
    public function getOriginalite()
    {
        return $this->originalite;
    }
}
