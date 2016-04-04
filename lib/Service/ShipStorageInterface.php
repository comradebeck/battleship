<?php

/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 10:56 PM
 */
interface ShipStorageInterface
{
    public function fetchAllShipsData();
    public function fetchSingleShipData($id);
}