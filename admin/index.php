<?php
// setup environment
ini_set('display_errors', '1');
error_reporting(-1);
date_default_timezone_set('UTC');

// include DB passwords
require_once("pass.php");


// connect to DB
$conn = new PDO('mysql:host=localhost;dbname=andra_magazin_de_materiale', DB_USERNAME, DB_PASSWORD);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//$conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );

// test insert
/*
$conn->prepare("INSERT INTO `adminUsers` SET `username`=?, `password`=?")->execute([
    'test',
    md5('test'),
]);
*/

require("display-auth.php");
