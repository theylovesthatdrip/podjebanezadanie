<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj zdjęcie</title>
</head>

<script>
    function checkIfEmpty() {
        let username = document.forms["add-photo"]["planetFile"].value;
        let password = document.forms["add-photo"]["astroName"].value;
        // let email = document.forms["add-photo"]["azymut"].value;
        // let institute = document.forms["add-photo"]["distance"].value;
        let institute = document.forms["add-photo"]["gallery"].value;
        // if ((planetFile == "") || (astroName == "") || (azymut == "") || (distance == "") || (gallery == "")) {
        if ((planetFile == "") || (astroName == "") || (gallery == "")) {
            alert("Zostawiłeś puste wartości!");
            return false;
        }
    }
</script>

<body>

    <?php

    require '../templates/header.php';
    require '../auth/validate.php';

    ?>

    <section id="even-column">
        <div>

            <form name="add-photo" action="create_photo_script.php" method="post" onsubmit=" return checkIfEmpty()" enctype="multipart/form-data">

                Plik [JPG/PNG/GIF] <input type="file" name="planetFile" id="planetFile" required> <br> <br>

                Nazwa obiektu astronimicznego: <input type="text" id="astroName" name="astroName" required> <br> <br>

                Azymut [&deg;] <input type="number" step="0.01" id="azymut" name="azymut"> <br> <br>

                Odległość [AU] <input type="number" step="0.01" id="distance" name="distance"> <br> <br>

                Galeria <select id="gallery_id" name="gallery_id" required>

                    <?php
                    require '../utils/db_connect.php';

                    $sql = "SELECT `id`,`name` FROM galleries";

                    if ($wynik = mysqli_query($conn, $sql)) {
                        while ($wiersz = $wynik->fetch_row()) {
                            echo "<option value=" . $wiersz[0] . ">" . $wiersz[1] . "</option>";
                        }
                    }
                    ?>

                </select>
                <a href="create_gallery_form.php?success=true">Nowa galeria</a> <br> <br>

                <input type="submit" value="Dodaj">
            </form>
        </div>
    </section>

    <?php

    require '../templates/footer.php';

    ?>

</body>

</html>