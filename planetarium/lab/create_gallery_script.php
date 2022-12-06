<?php // require '../auth/validate.php';

require '../utils/db_connect.php';

$select = mysqli_query($conn, "SELECT * FROM galleries WHERE `name` = '" . $_POST['galleryName'] . "'");
if (mysqli_num_rows($select)) {
    // header("Location: create_gallery_form.php?success=true");
    // echo '<script>alert("Galeria o podanej nazwie już istnieje")</script>';
    
    echo "<script>if(confirm('Galeria o podanej nazwie już istnieje')) document.location = 'create_gallery_form.php?success=true';</script>";
} else {

    $filename = $_FILES["galleryImg"]["name"];
    $tempname = $_FILES["galleryImg"]["tmp_name"];
    $folder = "../media/" . $filename;

    $sql = "INSERT INTO galleries (thumbnail_file_path, `name`) VALUES ('$filename', '$_POST[galleryName]')";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {

        header("Location: create_photo_form.php?success=true");
    }
}
