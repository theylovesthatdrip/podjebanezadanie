<?php

require '../templates/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
</head>

<script>
    function checkIfEmpty() {
        let username = document.forms["login-form"]["username"].value;
        let password = document.forms["login-form"]["password"].value;
        if ((username == "") || (password == "")) {
            alert("Zostawiłeś puste wartości!");
            return false;
        }
    }
</script>

<body>
    <div>
        <form name="login-form" action="login_script.php" method="post" onsubmit=" return checkIfEmpty()">
            Nazwa użytkownika <input type="text" name="username" required>
            Hasło <input type="password" name="password" required>
            <input type="submit" value="Zaloguj">
        </form>
        <pre>Nie masz konta? <a href="register.php">Kliknij tutaj</a>
    </div>

</body>

<?php

require '../templates/footer.php';

?>

</html>