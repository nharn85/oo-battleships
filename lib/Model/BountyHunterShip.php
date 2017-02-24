<?php
/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-24
 * Time: 10:36 AM
 */

namespace Model;


class BountyHunterShip extends AbstractShip
{
    use SettableJediFactorTrait;

    public function isFunctional()
    {
        return true;
    }

    public function getType()
    {
        return 'Bounty Hunter';
    }
}