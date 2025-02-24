<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sesja.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1>Strona Logowania</h1>

    <form action="" method="post">
        <?php if (isset($_SESSION['status_logowania']) &&  $_SESSION['status_logowania'] == true ) { ?>
            <p>Jesteś zalogowany jako: <?php echo $_SESSION['login'] ?></p>
            <input type="submit" value="Wyloguj mnie" name="wyloguj mnie">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                session_unset();
                session_destroy();
                echo 'jesteś wylogowany';
            } ?>
        <?php } else { ?>
            <label for="login">Podaj login:</label><br>
            <input type="text" name="login" id="login">
            <br>
            <label for="haslo">Podaj hasło:</label><br>
            <input type="password" name="haslo" id="haslo">
            <br>
            <input type="submit" value="Zaloguj">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['login'] == 'admin' && $_POST['haslo'] == 'admin') {
                echo 'Udane logowanie';
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['haslo'] = $_POST['haslo'];
                $_SESSION['status_logowania'] = true;
            } else {
                echo '<br>';
                echo 'Logowanie nieudane';
            } ?>

        <?php } ?>
        <?php include 'print_r.php'; ?>
        <?php include 'stopka.php' ?>
    </form>
</body>

</html>