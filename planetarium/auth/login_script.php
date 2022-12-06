<?php

require '../utils/db_connect.php';
session_start();

if ($_POST["username"] == "" or $_POST["password"] == "") {
    header("Location: login.php");
}

$kwerenda = "SELECT * FROM users";

$sql = $conn->query($kwerenda);

if ($sql->num_rows > 0) {
    while ($db = $sql->fetch_assoc()) {
        if ($_POST["username"] === $db["user login"]) {

            if (hash("sha256", $_POST["password"]) == $db["password"]) {

                $_SESSION["USERNAME"] = $db["username"];
                $_SESSION["ID"] = $db["userID"];
                header("Location: ../index.php?success=true");
            } else {
                header("Location: login.php?success=false");
            }
        } else {
            header("Location: ../index.php?success=true");
        }
    }
} else {
    header("Location: login.php?success=false");
}
