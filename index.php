<?php
if(!empty($_POST['Submit'])){
    if (isset($_POST['Submit'])) {
        if($_POST['login'] === "admin"){
            if($_POST['haslo'] === "test"){
                echo "<h1>Poprawne Login i Hasło</h1><br>";
                echo "Witamy ".$_POST['login'];
            }
            else {
                echo "<h1>Błędne Hasło</h1>";
            }
        }
        else {
            echo "<h1>Błędny Login</h1>";
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie2</title>
</head>
<body>
    <form action="" method="post">
        <h3>Podaj Login:</h3> <input type="text" name="login">
        <br>

        <h3>Podaj Hasło:</h3> <input type="password" name="haslo">
        <br>

        <br>
        <input type="submit" value="Zaloguj" name="Submit">
    </form>
</body>
</html>
