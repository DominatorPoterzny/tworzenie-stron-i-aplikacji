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
    <?php if ($_SESSION['status_logowania']) {
        echo '<h1> Strona dla zalogowanych</h1>';
        include 'print_r.php';
    } else {
        echo 'Zaloguj się';
    } ?>
</body>

</html>