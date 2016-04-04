<?php

/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 4:49 PM
 */
class RebelShip extends AbstractShip
{
    public function getType() {
        echo "Rebel";
    }

    public function isFunctional()
    {
        return true;
    }
    public function getNameAndSpecs($useShortFormat = false)
    {

        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Jedi)';
        return $val;
    }
    public function getJediFactor()
    {
        return rand(10, 30);
    }
}