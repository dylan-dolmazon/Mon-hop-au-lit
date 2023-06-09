<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Property extends \App\Entity\Property implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'house', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent1', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent2', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent3', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent4', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'mortgage', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'player', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'cases', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent5', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'price_house'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'house', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent1', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent2', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent3', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent4', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'mortgage', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'player', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'cases', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'rent5', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'price_house'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Property $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getHouse(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHouse', []);

        return parent::getHouse();
    }

    /**
     * {@inheritDoc}
     */
    public function setHouse(?int $house): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHouse', [$house]);

        return parent::setHouse($house);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent', []);

        return parent::getRent();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent(float $rent): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent', [$rent]);

        return parent::setRent($rent);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent1(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent1', []);

        return parent::getRent1();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent1(float $rent1): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent1', [$rent1]);

        return parent::setRent1($rent1);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent2(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent2', []);

        return parent::getRent2();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent2(float $rent2): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent2', [$rent2]);

        return parent::setRent2($rent2);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent3(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent3', []);

        return parent::getRent3();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent3(float $rent3): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent3', [$rent3]);

        return parent::setRent3($rent3);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent4(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent4', []);

        return parent::getRent4();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent4(float $rent4): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent4', [$rent4]);

        return parent::setRent4($rent4);
    }

    /**
     * {@inheritDoc}
     */
    public function getMortgage(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMortgage', []);

        return parent::getMortgage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMortgage(float $mortgage): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMortgage', [$mortgage]);

        return parent::setMortgage($mortgage);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(string $color): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayer(): ?\App\Entity\Player
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayer', []);

        return parent::getPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlayer(?\App\Entity\Player $player): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlayer', [$player]);

        return parent::setPlayer($player);
    }

    /**
     * {@inheritDoc}
     */
    public function getCases(): ?\App\Entity\Cases
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCases', []);

        return parent::getCases();
    }

    /**
     * {@inheritDoc}
     */
    public function setCases(?\App\Entity\Cases $cases): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCases', [$cases]);

        return parent::setCases($cases);
    }

    /**
     * {@inheritDoc}
     */
    public function getRent5(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRent5', []);

        return parent::getRent5();
    }

    /**
     * {@inheritDoc}
     */
    public function setRent5(?float $rent5): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRent5', [$rent5]);

        return parent::setRent5($rent5);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceHouse(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceHouse', []);

        return parent::getPriceHouse();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceHouse(float $price_house): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceHouse', [$price_house]);

        return parent::setPriceHouse($price_house);
    }

}
