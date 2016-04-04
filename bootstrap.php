<?php
/**
 * Created by PhpStorm.
 * User: comradebeck
 * Date: 3/31/16
 * Time: 2:29 PM
 */

$configuration = array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => '_3ur3kA_',
);

require_once __DIR__ . '/lib/Service/Container.php';

require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Model/BrokenShip.php';
require_once __DIR__ . '/lib/Service/ShipStorageInterface.php';
require_once __DIR__ . '/lib/Service/PdoShipStorage.php';
require_once __DIR__.'/lib/Service/JsonFileShipStorage.php';


require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';