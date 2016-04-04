<?php

/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 10:49 PM
 */
class JsonFileShipStorage implements ShipStorageInterface
{
    private $filename;

    public function __construct($jsonFilePath)
    {
        $this->filename = $jsonFilePath;
    }
    public function fetchAllShipsData()
    {
        $jsonContents = file_get_contents($this->filename);
        return json_decode($jsonContents, true);
    }
    public function fetchSingleShipData($id)
    {
        $ships = $this->fetchAllShipsData();
        foreach ($ships as $ship) {
            if ($ship['id'] == $id) {
                return $ship;
            }
        }
        return null;
    }
}