<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Patient extends \Application\Entity\Patient implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'firstname', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'lastname', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'street', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'zip', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'city', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'image', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'isAsleep', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'companyid'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'firstname', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'lastname', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'street', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'zip', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'city', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'image', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'isAsleep', '' . "\0" . 'Application\\Entity\\Patient' . "\0" . 'companyid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Patient $proxy) {
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
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip($zip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', [$zip]);

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', []);

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
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
    public function setIsAsleep($isAsleep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAsleep', [$isAsleep]);

        return parent::setIsAsleep($isAsleep);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAsleep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAsleep', []);

        return parent::getIsAsleep();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyid(\Application\Entity\Company $companyid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyid', [$companyid]);

        return parent::setCompanyid($companyid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyid', []);

        return parent::getCompanyid();
    }

}