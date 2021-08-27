<?php

$dbhost = "31.170.167.102";
$dbname = "u674201660_main_db";
$dbuser = "u674201660_wathergeen";
$dbpass = "S3nh4&sys";

$conn = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass, [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
