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
            let username = document.forms["register-form"]["username"].value;
            let password = document.forms["register-form"]["password"].value;
            let email = document.forms["register-form"]["email"].value;
            let institute = document.forms["register-form"]["institution"].value;
            if ((username == "") || (password == "") || (email == "") || (institution == "")) {
                alert("Zostawiłeś puste wartości!");
                return false;
            }
        }
    </script>

<body>
    <div>
        <form name="register-form" action="register_script.php" method="post" onsubmit=" return checkIfEmpty()">
            Nazwa użytkownika <input type="text" name="username" required>
            Hasło <input type="password" name="password" required>
            E-mail <input type="email" name="email" required>
            Instytut <input type="text" name="institution" required>
            <input type="submit" value="Zarejstruj">
        </form>
    </div>

</body>

<?php

require '../templates/footer.php';

?>

</html>