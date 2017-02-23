<?php

/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-22
 * Time: 3:14 PM
 */
class BrokenShip extends AbstractShip {
  public function getJediFactor() {
    return 0;
  }

  public function isFunctional() {
	return false;
  }

  public function getType() {
	return 'Broken';
  }
}