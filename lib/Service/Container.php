<?php

/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-22
 * Time: 1:09 PM
 */

class Container {

  private $configuration;
  private $pdo;
  private $shipLoader;
  private $shipStorage;
  private $battleManager;

  public function __construct(array $configuration) {
  	$this->configuration = $configuration;
  }

  /**
   * @return PDO
   */
	public function getPDO() {

	  if ($this->pdo === null){
		$this->pdo = new PDO(
		  $this->configuration['db_dsn'],
		  $this->configuration['db_user'],
		  $this->configuration['db_pass']
		);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }

	  return $this->pdo;
	}

  /**
   * @return ShipStorageInterface
   */
  public function getShipStorage() {
	if ($this->shipStorage === null){
	  // $this->shipStorage = new PdoShipStorage($this->getPDO());
	  $this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
	}
	return $this->shipStorage;
  }
  /**
   * @return ShipLoader
   */
  public function getShipLoader() {
    if ($this->shipLoader === null){
      $this->shipLoader = new ShipLoader($this->getShipStorage());
	}
	return $this->shipLoader;
  }

  /**
   * @return mixed
   */
  public function getBattleManager() {
	if ($this->battleManager === null){
	  $this->battleManager = new BattleManager();
	}
	return $this->battleManager;
  }
}