<?php
require '../utils/db_connect.php';

$filename = $_FILES["planetFile"]["name"];
$tempname = $_FILES["planetFile"]["tmp_name"];
$folder = "../media/" . $filename;

if ($_FILES["planetFile"]["size"] > 5000000) {
    // echo "<script>alert('Plik przekracza 5MB')</script>";
    // header("Location: create_photo_form.php?success=true");

    echo "<script>if(confirm('Plik przekracza 5MB')) document.location = 'create_photo_form.php?success=true';</script>";
} else {

    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {

        $sql = $conn->prepare(
            "INSERT INTO planets(`user_id`, `name`, `azimuth`, `distance`, `file_path`, gallery_id) VALUES (?, ?, ?, ?, ?, ?)"
        );
        $sql->bind_param(
            'ssssss',
            $_SESSION["ID"],
            $_POST["astroName"],
            $_POST["azymut"],
            $_POST["distance"],
            $filename,
            $_POST["gallery_id"],
        );

        $sql->execute();

        if (move_uploaded_file($tempname, $folder)) {

            header("Location: index.php?success=true");
        }
    } else {
        echo "<script>if(confirm('Plik nie jest plikiem graficznym')) document.location = 'create_photo_form.php?success=true';</script>";
    }
}
