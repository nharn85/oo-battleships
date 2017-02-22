<?php

class Ship
{
  	/**
   * @var int
   */
  	private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $weaponPower = 0;

    /**
     * @var int
     */
    private $jediFactor = 0;

    /**
     * @var int
     */
    private $strength = 0;

    /**
     * @var bool
     */
    private $underRepair;

    /**
     * Ship constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }

    /**
     * @return string
     */
    public function sayHello() {
        return 'hello';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }


    /**
     * @param $strength
     * @throws Exception
     */
    public function setStrength($strength)
    {
        if (!is_numeric($strength)){
            throw new Exception('Invalid strength passed '.$strength);
        } else {
            $this->strength = $strength;
        }

    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

	/**
	 * @return integer
	 */
	public function getId() {
	  return $this->id;
	}

	/**
	 * @param integer $id
	 */
	public function setId($id) {
	  $this->id = $id;
	}


  /**
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat){
            return sprintf(
                '%s: %s, %s, %s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    /**
     * @param $givenShip
     * @return bool
     */
    function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}