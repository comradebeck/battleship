<?php
/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 2:29 PM
 */

class Ship extends AbstractShip {

    protected $jediFactor = 0;

    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);
        // randomly put this ship under repair
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function getType() {
        echo "Empire";
    }
}