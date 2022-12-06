<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Powitalna</title>
</head>

<body>

    <?php

    require 'templates/header.php';

    ?>

    <div>
        <blockquote>

            <?php

            require '../planetarium/utils/db_connect.php';
            $x = rand(0, 3);

            $sql = "SELECT id, content, author FROM quotes ORDER BY RAND() LIMIT 1";
            $result = $conn->query($sql);

            if ($row = $result->fetch_assoc()) {
                echo $row["content"] . " ~" . $row["author"] . "<br>" . "<br>";
            }
            $conn->close();

            ?>
        </blockquote>
    </div>

    <section id="even-column">
        <div class="box">
            <div>
                <h3>Ilość ciał niebieskich:</h3>
            </div>
            <div class="box-content"></div>

        </div>

        <div class="box">
            <div>
                <h3>Nowi użytkownicy:</h3>
            </div>
            <div class="box-content"></div>
        </div>
    </section>

    <?php

    require 'templates/footer.php';

    ?>

</body>

</html>