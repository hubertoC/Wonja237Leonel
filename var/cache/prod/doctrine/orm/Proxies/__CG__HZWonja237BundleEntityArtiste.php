<?php

namespace Proxies\__CG__\HZ\Wonja237Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Artiste extends \HZ\Wonja237Bundle\Entity\Artiste implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'id', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'name', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'surname', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'ville', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'description', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'status', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'sexe', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'email', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'style', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'number', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'lu', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'image', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'video', 'commentaire', 'reservation', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'categories'];
        }

        return ['__isInitialized__', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'id', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'name', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'surname', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'ville', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'description', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'status', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'sexe', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'email', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'style', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'number', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'lu', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'image', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'video', 'commentaire', 'reservation', '' . "\0" . 'HZ\\Wonja237Bundle\\Entity\\Artiste' . "\0" . 'categories'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Artiste $proxy) {
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
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
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
    public function setStyle($style)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStyle', [$style]);

        return parent::setStyle($style);
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStyle', []);

        return parent::getStyle();
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
    public function setImage(\HZ\Wonja237Bundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo(\HZ\Wonja237Bundle\Entity\Video $video)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\HZ\Wonja237Bundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\HZ\Wonja237Bundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\HZ\Wonja237Bundle\Entity\Commentaire $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\HZ\Wonja237Bundle\Entity\Commentaire $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\HZ\Wonja237Bundle\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', [$commentaire]);

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\HZ\Wonja237Bundle\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', [$commentaire]);

        return parent::removeCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\HZ\Wonja237Bundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\HZ\Wonja237Bundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservation', []);

        return parent::getReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

}
