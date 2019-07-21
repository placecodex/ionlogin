<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

require_once "functions.php";
$host = 'localhost';
$user = 'root';
$pass = '123456';
$db   = 'ionlogin';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
