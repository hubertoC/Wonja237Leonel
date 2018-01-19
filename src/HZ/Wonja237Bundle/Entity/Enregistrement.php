<?php

namespace HZ\Wonja237Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table(name="enregistrement")
 * @ORM\Entity(repositoryClass="HZ\Wonja237Bundle\Repository\EnregistrementRepository")
 */
class Enregistrement
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


    /**
     * @var string
     *
     * @ORM\Column(name="nomArtiste", type="string", length=255)
     */
    private $nomArtiste;


    /**
     * @var string
     *
     * @ORM\Column(name="link1", type="string", length=255)
     */
    private $link1;


    /**
     * @var string
     *
     * @ORM\Column(name="link2", type="string", length=255)
     */
    private $link2;


    /**
     * @var string
     *
     * @ORM\Column(name="link3", type="string", length=255)
     */
    private $link3;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255)
     */
    private $description;



    /**
     * @var string
     *
     * @ORM\Column(name="autreCategorie", type="string", length=255)
     */
    private $autreCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="number1", type="integer")
     */
    private $number1;

    /**
     * @var int
     *
     * @ORM\Column(name="number2", type="integer")
     */
    private $number2;


    /**
     * @var bool
     *
     * @ORM\Column(name="lu", type="boolean")
     */
    private $lu;


    /**
     * @var bool
     *
     * @ORM\Column(name="confirm", type="boolean")
     */
    private $confirm;



    /**
     * @var bool
     *
     * @ORM\Column(name="groupe", type="boolean")
     */
    private $groupe;

    /**
     * @var bool
     *
     * @ORM\Column(name="solo", type="boolean")
     */
    private $solo;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;



    /**
     * @ORM\OneToOne(targetEntity="HZ\Wonja237Bundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
     private $image;

     /**
      *
      * @ORM\ManyToMany(targetEntity="HZ\Wonja237Bundle\Entity\Category", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
      private $categories;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return EnregistrementAutreArtiste
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return EnregistrementAutreArtiste
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EnregistrementAutreArtiste
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return EnregistrementAutreArtiste
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }


    /**
     * Set lu
     *
     * @param boolean $lu
     *
     * @return EnregistrementAutreArtiste
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return bool
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return EnregistrementAutreArtiste
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set style
     *
     * @param string $style
     *
     * @return EnregistrementAutreArtiste
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return EnregistrementAutreArtiste
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param \HZ\Wonja237Bundle\Entity\Image $image
     *
     * @return EnregistrementAutreArtiste
     */
    public function setImage(\HZ\Wonja237Bundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \HZ\Wonja237Bundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add category
     *
     * @param \HZ\Wonja237Bundle\Entity\Category $category
     *
     * @return EnregistrementAutreArtiste
     */
    public function addCategory(\HZ\Wonja237Bundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \HZ\Wonja237Bundle\Entity\Category $category
     */
    public function removeCategory(\HZ\Wonja237Bundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set nomArtiste.
     *
     * @param string $nomArtiste
     *
     * @return EnregistrementAutreArtiste
     */
    public function setNomArtiste($nomArtiste)
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    /**
     * Get nomArtiste.
     *
     * @return string
     */
    public function getNomArtiste()
    {
        return $this->nomArtiste;
    }

    /**
     * Set link1.
     *
     * @param string $link1
     *
     * @return EnregistrementAutreArtiste
     */
    public function setLink1($link1)
    {
        $this->link1 = $link1;

        return $this;
    }

    /**
     * Get link1.
     *
     * @return string
     */
    public function getLink1()
    {
        return $this->link1;
    }

    /**
     * Set link2.
     *
     * @param string $link2
     *
     * @return EnregistrementAutreArtiste
     */
    public function setLink2($link2)
    {
        $this->link2 = $link2;

        return $this;
    }

    /**
     * Get link2.
     *
     * @return string
     */
    public function getLink2()
    {
        return $this->link2;
    }

    /**
     * Set link3.
     *
     * @param string $link3
     *
     * @return EnregistrementAutreArtiste
     */
    public function setLink3($link3)
    {
        $this->link3 = $link3;

        return $this;
    }

    /**
     * Get link3.
     *
     * @return string
     */
    public function getLink3()
    {
        return $this->link3;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return EnregistrementAutreArtiste
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set autreCategorie.
     *
     * @param string $autreCategorie
     *
     * @return EnregistrementAutreArtiste
     */
    public function setAutreCategorie($autreCategorie)
    {
        $this->autreCategorie = $autreCategorie;

        return $this;
    }

    /**
     * Get autreCategorie.
     *
     * @return string
     */
    public function getAutreCategorie()
    {
        return $this->autreCategorie;
    }

    /**
     * Set number1.
     *
     * @param int $number1
     *
     * @return EnregistrementAutreArtiste
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;

        return $this;
    }

    /**
     * Get number1.
     *
     * @return int
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * Set number2.
     *
     * @param int $number2
     *
     * @return EnregistrementAutreArtiste
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;

        return $this;
    }

    /**
     * Get number2.
     *
     * @return int
     */
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * Set confirm.
     *
     * @param bool $confirm
     *
     * @return EnregistrementAutreArtiste
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get confirm.
     *
     * @return bool
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set groupe.
     *
     * @param bool $groupe
     *
     * @return EnregistrementAutreArtiste
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe.
     *
     * @return bool
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set solo.
     *
     * @param bool $solo
     *
     * @return EnregistrementAutreArtiste
     */
    public function setSolo($solo)
    {
        $this->solo = $solo;

        return $this;
    }

    /**
     * Get solo.
     *
     * @return bool
     */
    public function getSolo()
    {
        return $this->solo;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}
