<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <form action="" method="post">
        <label for="login">Podaj login:</label><br>
        <input type="text" name="login" id="login">
        <br>
        <label for="haslo">Podaj hasło:</label><br>
        <input type="password" name="haslo" id="haslo">
        <br>
        <input type="submit" value="Zaloguj">
        <?php if ($_POST['login'] == 'Admin' && $_POST['haslo'] == 'dupa' ) {
            echo 'Logowanie udane';
            $_SESSION = $_POST['login'];
            $_SESSION = $_POST['haslo'];
            $_SESSION['status_logowania'] = true;
        } else {
            echo 'Logowanie nieudane';
        } ?>
        <?php include 'print_r.php'; ?>
    </form>
</body>
</html>