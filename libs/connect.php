<?php 
    require_once('class/dbConnect.php');

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = "innovation-technology";

    $dbClass = new DBConnect($dbhost,$dbuser,$dbpass,$dbname);
    $db      = $dbClass->connect;
    $db->exec("SET NAMES 'utf8'");