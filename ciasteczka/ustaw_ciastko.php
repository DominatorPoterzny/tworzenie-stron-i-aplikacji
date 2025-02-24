<?php session_start() ?>
<?php $sukces = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['nazwa'];
    $value = $_POST['zawartosc'];
    $expires = $_POST['wygasa'];
    session_set_cookie_params($name, $value, $expires + time());
} ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <?php if ($_SESSION['status_logowania'] == true) { ?>
        <h1>Ustaw Ciasteczko</h1>

        <form action="" method="post">
            <label for="Nazwa">Nazwa<sup>*</sup>:</label>
            <input type="text" name="nazwa" id="nazwa">
            <br>
            <label for="zawartosc">Zawartość:</label>
            <textarea name="zawartosc" id="zawartosc" placeholder="zawartość"></textarea>
            <br>
            <label for="wygasa">Wygasa:</label>
            <input type="number" name="wygasa" id="wygasa">
            <p>[w sekundach]</p><br>
            <input type="reset" value="Odśwież">
            <input type="submit" value="Ustaw">
        </form>

    <?php } else {
        echo 'Musisz być zalogowany, aby ustwić ciasteczko';
    } ?>

    <?php include 'print_r.php'; ?>
    <?php include 'stopka.php' ?>

</body>

</html>