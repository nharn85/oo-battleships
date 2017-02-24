<?php
/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-02-24
 * Time: 10:42 AM
 */

namespace Model;


trait SettableJediFactorTrait
{
    private $jediFactor;

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}