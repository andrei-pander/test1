<?php

require "logger.php";
require "file.php";
require "database.php";

$db = new Database("mysql:dbname=db_name;host=127.0.0.1", "user", "pass");

if (!$db->isExistTable()) {

    if ($rows = File::readCSV('file.csv')) {
        $db->createTable();
        array_shift($rows);
        $db->importData($rows);
    }
}

echo $db->getRandRow();
