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
    <form method="post">
        <input type="submit" value="Wyloguj mnie" name="wyloguj mnie">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_unset();
            session_destroy();
            echo 'jesteś wylogowany';
        } ?>
        <?php include 'print_r.php' ?>
    </form>
</body>

</html>