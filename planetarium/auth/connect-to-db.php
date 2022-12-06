<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "planetarium";

$polaczenia = new mysqli($server, $user, $pass, $bd);

if ($polaczenia->connect_error) echo "Błąd: " . connect_error;
// else echo "Działa <br>";

