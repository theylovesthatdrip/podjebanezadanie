<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$db = "planetarium";

$conn = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
    echo "Nie dziala" . mysqli_connect_error();
}
