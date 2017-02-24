<?php

namespace Service;

interface ShipStorageInterface
{
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