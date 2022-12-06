<?php
require '../utils/db_connect.php';

unset($_SESSION["USERNAME"]);
unset($_SESSION["ID"]);
header("Location: ../index.php?logout=true");

$conn->close();
