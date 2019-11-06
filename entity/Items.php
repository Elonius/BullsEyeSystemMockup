<?php

$projectRoot = $_SERVER['DOCUMENT_ROOT'] . '/shawnmcc/CRUDApp_RESTful';

require_once ($projectRoot . '/utils/ChromePHP.php');

class Weapons implements JsonSerializable {

    private $weaponID;
    private $weaponName;
    private $weaponLevel;
    private $weaponDescription;
    private $weaponDamage;
    private $weaponLocation;

    public function __construct($weaponID, $weaponName, $weaponLevel, $weaponDescription, $weaponDamage, $weaponLocation) {
//        ChromePhp::log("1: " . $weaponID . "|" . $weaponName . "|" . $weaponLevel . "|" . $weaponDescription . "|" . $weaponDamage . "|" . $weaponLocation);
        $this->weaponID = $weaponID;
        $this->weaponName = $weaponName;
        $this->weaponLevel = $weaponLevel;
        $this->weaponDescription = $weaponDescription;
        $this->weaponDamage = $weaponDamage;
        $this->weaponLocation = $weaponLocation;
//        ChromePhp::log("2: " . $this->weaponID . "|" . $this->weaponName . "|" . $this->weaponLevel . "|" . $this->weaponDescription . "|" . $this->weaponDamage . "|" . $this->weaponLocation);
    }

    public function getWeaponID() {
        return $this->weaponID;
    }

    public function getWeaponName() {
        return $this->weaponName;
    }

    public function getWeaponLevel() {
        return $this->weaponLevel;
    }

    public function getWeaponDescription() {
        return $this->weaponDescription;
    }

    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    public function getWeaponLocation() {
        return $this->weaponLocation;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
