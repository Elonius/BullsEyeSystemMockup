<?php

class DbConnector {

    public function connect_db() {
        $db = new PDO("mysql:host=localhost:3310;dbname=bullseyedb", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // throw exceptions
        return $db;
    }
}
