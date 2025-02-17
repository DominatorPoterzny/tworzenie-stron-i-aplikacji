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
        <input type="submit" value="Wyloguj mnie" name="wyloguj mnie">
         <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_unset();
            session_destroy();
         } ?>
         <?php include 'print_r.php' ?>
    </form>
</body>

</html>