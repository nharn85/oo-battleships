<?php

namespace Model;

class RebelShip extends AbstractShip {

  public function getFavoriteJedi() {
	$coolJedis = array('Yoda', 'Ben kenobi');
	$key = array_rand($coolJedis);
	return $coolJedis[$key];
  }

  public function getType() {
	return 'Rebel';
  }

  public function isFunctional() {
	return true;
  }

  public function getNameAndSpecs($useShortFormat = false) {

    $val = parent::getNameAndSpecs($useShortFormat);
    $val .= ' (Rebel)';

    return $val;
  }

  public function getJediFactor()
  {
	return rand(10, 30);
  }
}