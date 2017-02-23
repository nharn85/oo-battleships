<?php

/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-22
 * Time: 1:51 PM
 */
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