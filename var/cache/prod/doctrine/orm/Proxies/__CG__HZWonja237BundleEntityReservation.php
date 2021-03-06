<?php

namespace Proxies\__CG__\HZ\Wonja237Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reservation extends \HZ\Wonja237Bundle\Entity\Reservation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'name', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'surname', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'email', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'number', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'number2', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'typeDeReservation', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'typeDeReservatioAutren', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'ville', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'exigence', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'date', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'startTime', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'dateDeReservation', 'artiste', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'lu'];
        }

        return ['__isInitialized__', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'name', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'surname', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'email', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'number', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'number2', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'typeDeReservation', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'typeDeReservatioAutren', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'ville', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'exigence', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'date', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'startTime', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'dateDeReservation', 'artiste', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Reservation' . "\0" . 'lu'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reservation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurname($surname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurname', [$surname]);

        return parent::setSurname($surname);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurname', []);

        return parent::getSurname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setExigence($exigence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExigence', [$exigence]);

        return parent::setExigence($exigence);
    }

    /**
     * {@inheritDoc}
     */
    public function getExigence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExigence', []);

        return parent::getExigence();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeReservation($dateDeReservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeReservation', [$dateDeReservation]);

        return parent::setDateDeReservation($dateDeReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeReservation', []);

        return parent::getDateDeReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtiste(\HZ\Wonja237Bundle\Entity\Artiste $artiste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtiste', [$artiste]);

        return parent::setArtiste($artiste);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtiste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtiste', []);

        return parent::getArtiste();
    }

    /**
     * {@inheritDoc}
     */
    public function setLu($lu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLu', [$lu]);

        return parent::setLu($lu);
    }

    /**
     * {@inheritDoc}
     */
    public function getLu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLu', []);

        return parent::getLu();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber2($number2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber2', [$number2]);

        return parent::setNumber2($number2);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber2', []);

        return parent::getNumber2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeDeReservation($typeDeReservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeDeReservation', [$typeDeReservation]);

        return parent::setTypeDeReservation($typeDeReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeDeReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeDeReservation', []);

        return parent::getTypeDeReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeDeReservatioAutren($typeDeReservatioAutren = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeDeReservatioAutren', [$typeDeReservatioAutren]);

        return parent::setTypeDeReservatioAutren($typeDeReservatioAutren);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeDeReservatioAutren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeDeReservatioAutren', []);

        return parent::getTypeDeReservatioAutren();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartTime($startTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartTime', [$startTime]);

        return parent::setStartTime($startTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartTime', []);

        return parent::getStartTime();
    }

}
