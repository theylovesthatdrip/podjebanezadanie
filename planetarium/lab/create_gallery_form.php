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
        // let username = document.forms["add-gallery"]["galleryImg"].value;
        let password = document.forms["add-gallery"]["galleryName"].value;
        // if ((galleryImg == "") || (galleryName == "")) {
        if (galleryName == "") {
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

            <form name="add-gallery" action="create_gallery_script.php" method="post" onsubmit=" return checkIfEmpty()" enctype="multipart/form-data">

                Miniaturka <input type="file" id="galleryImg" name="galleryImg"> <br> <br>

                Nazwa galerii: <input type="text" id="galleryName" name="galleryName" required> <br> <br>

                <input type="submit" value="Dodaj">

            </form>
        </div>
    </section>

    <?php

    require '../templates/footer.php';

    ?>

</body>

</html>