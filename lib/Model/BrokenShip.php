<?php

/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 10:01 PM
 */
class BrokenShip extends AbstractShip
{
    public function getJediFactor()
    {
        return 0;
    }
    public function getType()
    {
        return 'Broken';
    }
    public function isFunctional()
    {
        return false;
    }
}