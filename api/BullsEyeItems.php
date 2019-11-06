<?php

$projectRoot = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . "/shawnmcc/CRUDApp_RESTful";
require_once ($projectRoot . "/db/WeaponAccessor.php");
require_once ($projectRoot . "/entity/Weapons.php");
require_once ($projectRoot . "/utils/ChromePHP.php");
//ChromePhp::log($projectRoot);
$method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
//ChromePhp::log($method);
//ChromePhp::log("After");
//ChromePhp::log("Time to REST");
switch ($method) {
    case "GET":
        doGet();
        break;
    case "POST":
        doPost();
        break;
    case "DELETE":
        doDelete();
        break;
    case "PUT":
        doPut();
        break;
}

function doGet() {
    if (!filter_has_var(INPUT_GET, "weaponID")) {
        try {
            $weapAcc = new WeaponAccessor();
            $results = $weapAcc->getAllWeapons();
            $results = json_encode($results, JSON_NUMERIC_CHECK);
            echo $results;
        } catch (Exception $ex) {
            echo "ERROR: " . $ex->getMessage();
        }
    } else {
        ChromePhp::log("You are requesting item " . filter_input(INPUT_GET, "weaponID"));
    }
}

// End of doGet

function doDelete() {
    ChromePhp::log("in SDWeapons");
    ChromePhp::log(filter_has_var(INPUT_GET, "weaponID"));

    if (!filter_has_var(INPUT_GET, "weaponID")) {
        ChromePhp::log("Bulk deletes not allowed");
    } else {
        $id = filter_input(INPUT_GET, "weaponID");

        // Creating a Weapon object
        $weaponObj = new Weapons($id, "dummyName", 1, "dummyDescription", "dummyDamage", "dummyLocation");

        // Delete object from the database
        $weaponAcc = new WeaponAccessor();
        $success = $weaponAcc->deleteWeapon($weaponObj);
        echo $success;
    }
}

// aka create/add
function doPost() {
    $body = file_get_contents("php://input");
    $content = json_decode($body, true);

    $weaponObj = new Weapons($content["weaponID"], $content["weaponName"], $content["weaponLevel"], $content["weaponDescription"], $content["weaponDamage"], $content["weaponLocation"]);
    $weaponAcc = new WeaponAccessor();
    $success = $weaponAcc->addWeapon($weaponObj);
    echo $success;
}

// aka update
function doPut() {
    $body = file_get_contents("php://input");
    $content = json_decode($body, true);

    $weaponObj = new Weapons($content["weaponID"], $content["weaponName"], $content["weaponLevel"], $content["weaponDescription"], $content["weaponDamage"], $content["weaponLocation"]);

    $weaponAcc = new WeaponAccessor();
    $success = $weaponAcc->updateWeapon($weaponObj);
    echo $success;
}
