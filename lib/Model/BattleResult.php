<?php

/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-22
 * Time: 10:09 AM
 */
class BattleResult {
	private $usedJediPowers;
	private $winningShip;
	private $losingShip;

	public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null) {
	  $this->usedJediPowers = $usedJediPowers;
	  $this->winningShip = $winningShip;
	  $this->losingShip = $losingShip;
	}

  /**
   * @return boolean
   */
  public function wereJediPowersUsed()
  {
	return $this->usedJediPowers;
  }

  /**
   * @return AbstractShip|null
   */
  public function getWinningShip()
  {
	return $this->winningShip;
  }

  /**
   * @return AbstractShip|null
   */
  public function getLosingShip()
  {
	return $this->losingShip;
  }

  public function isThereAWinner()
  {
    return $this->getWinningShip() !== null;
  }
}