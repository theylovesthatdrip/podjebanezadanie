<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="/planetarium/css/header.css">
</head>

<body>
    <header>

        <?php

        

        if (isset($_REQUEST["success"])) {
            if ($_REQUEST["success"] == "true") {
                echo '<a href="/planetarium/lab/index.php?success=true"><h1>PLANETARIUM</h1></a>';
            }
        } else {
            echo '<a href="/planetarium/index.php"><h1>PLANETARIUM</h1></a>';
        }

        ?>

        <form method="post">

            <?php
            if (isset($_REQUEST["success"])) {
                if ($_REQUEST["success"] == "true") {
                    echo '<input type="submit" value="Strona Główna" formaction="/planetarium/index.php?success=true">';
                    echo '<input type="submit" value="Wyloguj" formaction="/planetarium/auth/logout.php">';
                }
            } else {
                echo '<input type="submit" value="Zaloguj" formaction="/planetarium/auth/login.php">';
                echo '<input type="submit" value="Zarejstruj" formaction="/planetarium/auth/register.php">';
            }
            // WHERE PUT IMAGE AND AS IMG OR LINK
            ?>

        </form>
    </header>
</body>

</html>