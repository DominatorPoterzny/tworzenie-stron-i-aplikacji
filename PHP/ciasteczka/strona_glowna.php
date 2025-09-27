<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cookie.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1>Jakie powinno być dobre hasło?</h1>
    <?php if (isset($_COOKIE['good_pass'])) {
        echo 'Dobre hasło to: ' . $_COOKIE['good_pass'];
    } ?>

    <?php include 'print_r.php'; ?>
    <?php include 'stopka.php' ?>
</body>

</html>