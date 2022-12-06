<?php

require '../utils/db_connect.php';

if ($_POST["username"] == "" or $_POST["password"] == "" or $_POST["email"] == "" or $_POST["institution"] == "") {
    header("Location: register.php");
}

$select = mysqli_query($conn, "SELECT * FROM users WHERE `user login` = '" . $_POST['username'] . "'");
if (mysqli_num_rows($select)) {
    header("Location: register.php");
} else {

    $kwerenda = $conn->prepare(
        "INSERT INTO users(`user login`, password, email, institution) VALUES (?, ?, ?, ?)"
    );
    $kwerenda->bind_param(
        'ssss',
        $_POST["username"],
        hash("sha256", $_POST["password"]),
        $_POST["email"],
        $_POST["institution"]
    );
    if ($kwerenda->execute()) {
        header("Location: login.php");
    }
}


