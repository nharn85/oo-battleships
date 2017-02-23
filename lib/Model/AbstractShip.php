<?php

namespace Model;

abstract class AbstractShip {
  private $name;

  private $id;

  private $weaponPower = 0;

  private $strength = 0;

  abstract public function getJediFactor();
  abstract public function isFunctional();
  abstract public function getType();

  /**
   * Ship constructor.
   * @param $name
   */
  public function __construct($name)
  {
	$this->name = $name;
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
		$this->getJediFactor(),
		$this->strength
	  );
	} else {
	  return sprintf(
		'%s: w:%s, j:%s, s:%s',
		$this->name,
		$this->weaponPower,
		$this->getJediFactor(),
		$this->strength
	  );
	}
  }

  /**
   * @param $givenShip
   * @return bool
   */
  function doesGivenShipHaveMoreStrength($givenShip) {
	return $givenShip->strength > $this->strength;
  }
}