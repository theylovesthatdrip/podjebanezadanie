<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona dla zalogowanego użytkownika</title>
    <link rel="stylesheet" href="/planetarium/css/lab_main.css">
</head>


<body>

    <?php
    require '../templates/header.php';

    require '../auth/validate.php';
    echo $_SESSION["USERNAME"];
    echo $_SESSION["ID"];
    ?>

    <section id="even-column">
        <div class="box-log">

            <a href="../lab/create_photo_form.php?success=true">Nowe zdjęcie</a> <br> <br>
            <a href="#">Twoje zdjęcia</a> <br> <br>
            <a href="#">Galeria</a>

        </div>

        <div class="box-log">
            <div>
                <h3>Ostatnie posty:</h3>
            </div>
            <div class="box-content-log">

                <?php
                require '../utils/db_connect.php';

                $sql = $conn->query("SELECT * FROM planets WHERE user_id = '" . $_SESSION["ID"] . "' ORDER BY id DESC LIMIT 1");

                if ($sql->num_rows > 0) {
                    while ($row = $sql->fetch_assoc()) {
                        $imageURL = '../media/' . $row["file_path"];
                ?>
                        <div class="box-content-log-item">
                            <img src="<?php echo $imageURL; ?>" alt="" />
                            <table>
                                <tr>
                                    <th>Nazwa</th>
                                    <th>Azymut</th>
                                    <th>Odległość</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo $row["name"];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $row["azimuth"];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $row["distance"];
                                        ?>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    <?php }
                } else { ?>
                    <p>Umieść swój pierwszy post</p>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php

    require '../templates/footer.php';

    ?>

</body>

</html>