<?php

/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-23
 * Time: 1:49 PM
 */
interface ShipStorageInterface {
  /**
   * Returns an array of ship data
   * with keys id, name, weaponPower, defense
   * @return array
   */
  public function fetchAllShipsData();

  /**
   * @param $id
   * @return array()
   */
  public function fetchSingleShipData($id);
}