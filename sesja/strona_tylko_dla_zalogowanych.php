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
    <?php if ($_SESSION['status_logowania'] = true) {
        include 'print_r.php';
    } else{
        echo 'Zaloguj się';
    } ?>
</body>
</html>