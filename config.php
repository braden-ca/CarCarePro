<?php

session_start();

function get_db(){

    $user = "databoyz";
    $pass = "databoyz1";
    $dbname = "CarCarePro";
    $connstr = "mysql:host=localhost;dbname=$dbname";

    $db = new PDO($connstr, $user, $pass, array());

    return $db;

}

?>m