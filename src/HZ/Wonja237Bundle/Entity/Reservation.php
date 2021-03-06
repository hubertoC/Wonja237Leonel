<?php

namespace HZ\Wonja237Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="HZ\Wonja237Bundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var int
     *
     * @ORM\Column(name="number2", type="integer" ,nullable=true)
     */
    private $number2;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDeReservation", type="string", length=255)
     */
    private $typeDeReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDeReservatioAutren", type="string", length=255, nullable=true)
     */
    private $typeDeReservatioAutren;


    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="exigence", type="text")
     */
    private $exigence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime")
     */
    private $startTime;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeReservation", type="datetime")
     */
    private $dateDeReservation;

    /**
       * @ORM\ManyToOne(targetEntity="Artiste", inversedBy="reservation")
       * @ORM\JoinColumn(referencedColumnName="id", nullable=false)
       */
      protected $artiste;


      /**
       * @var bool
       *
       * @ORM\Column(name="lu", type="boolean")
       */
      private $lu;

      public function __construct()
        {
          $this->date         = new \Datetime();
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Reservation
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
     * @return Reservation
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
     * @return Reservation
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
     * Set number
     *
     * @param integer $number
     *
     * @return Reservation
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Reservation
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
     * Set exigence
     *
     * @param string $exigence
     *
     * @return Reservation
     */
    public function setExigence($exigence)
    {
        $this->exigence = $exigence;

        return $this;
    }

    /**
     * Get exigence
     *
     * @return string
     */
    public function getExigence()
    {
        return $this->exigence;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateDeReservation
     *
     * @param \DateTime $dateDeReservation
     *
     * @return Reservation
     */
    public function setDateDeReservation($dateDeReservation)
    {
        $this->dateDeReservation = $dateDeReservation;

        return $this;
    }

    /**
     * Get dateDeReservation
     *
     * @return \DateTime
     */
    public function getDateDeReservation()
    {
        return $this->dateDeReservation;
    }

    /**
     * Set artiste
     *
     * @param \HZ\Wonja237Bundle\Entity\Artiste $artiste
     *
     * @return Reservation
     */
    public function setArtiste(\HZ\Wonja237Bundle\Entity\Artiste $artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return \HZ\Wonja237Bundle\Entity\Artiste
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set lu
     *
     * @param boolean $lu
     *
     * @return Reservation
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return boolean
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set number2.
     *
     * @param int $number2
     *
     * @return Reservation
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
     * Set typeDeReservation.
     *
     * @param string $typeDeReservation
     *
     * @return Reservation
     */
    public function setTypeDeReservation($typeDeReservation)
    {
        $this->typeDeReservation = $typeDeReservation;

        return $this;
    }

    /**
     * Get typeDeReservation.
     *
     * @return string
     */
    public function getTypeDeReservation()
    {
        return $this->typeDeReservation;
    }

    /**
     * Set typeDeReservatioAutren.
     *
     * @param string|null $typeDeReservatioAutren
     *
     * @return Reservation
     */
    public function setTypeDeReservatioAutren($typeDeReservatioAutren = null)
    {
        $this->typeDeReservatioAutren = $typeDeReservatioAutren;

        return $this;
    }

    /**
     * Get typeDeReservatioAutren.
     *
     * @return string|null
     */
    public function getTypeDeReservatioAutren()
    {
        return $this->typeDeReservatioAutren;
    }

    /**
     * Set startTime.
     *
     * @param \DateTime $startTime
     *
     * @return Reservation
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}
