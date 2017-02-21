<?php

require_once __DIR__.'/lib/Ship.php';
require_once __DIR__.'/lib/BattleManager.php';

/**
 * @return array
 */
function get_ships()
{
    $ships = array();

    $ship = new Ship('Jedi Starfighter');
    $ship->setWeaponPower(5);
    $ship->setJediFactor(15);
    $ship->setStrength(50);
    $ships['starfighter'] = $ship;

    $ship2 = new Ship('CloakShape Fighter');
    $ship2->setWeaponPower(2);
    $ship2->setJediFactor(2);
    $ship2->setStrength(70);
    $ships['cloakshape_fighter'] = $ship2;

    $ship3 = new Ship('RZ-1 A-wing interceptor');
    $ship3->setWeaponPower(4);
    $ship3->setJediFactor(4);
    $ship3->setStrength(50);
    $ships['rz1_a_wing_interceptor'] = $ship3;

    $ship4 = new Ship('Super Star Destroyer');
    $ship4->setWeaponPower(70);
    $ship4->setJediFactor(0);
    $ship4->setStrength(500);
    $ships['super_star_destroyer'] = $ship4;
    return $ships;
}

/**
 * @param Ship $ship
 * @return bool
 */
function didJediDestroyShipUsingTheForce(Ship $ship)
{
    $jediHeroProbability = $ship->getJediFactor() / 100;

    return mt_rand(1, 100) <= ($jediHeroProbability*100);
}