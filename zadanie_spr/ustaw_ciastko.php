<?php $sukces = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nazwa'];
    $value = $_POST['zawartosc'];
    $expires = $_POST['wygasa'];
    $sukces = setcookie($name, $value, time() + $expires, '/');
} ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
        <p>Ciastko zostało ustawione</p>
    <?php } ?>
    <form action="" method="post">
        <label for="Nazwa">Nazwa<sup>*</sup>:</label><br>
        <input type="text" name="nazwa" id="nazwa" readonly value="favorite_movie" required>
        <br>
        <label for="zawartosc">Zawartość:</label><br>
        <textarea name="zawartosc" id="zawartosc" placeholder="zawartość ciastka" required></textarea>
        <br>
        <label for="wygasa">Wygasa:</label><br>
        <input type="number" name="wygasa" id="wygasa" step="60" min="0" value="60"><br>

        <input type="submit" value="Ustaw">
    </form>
    <a href="/zadanie_spr/strona_glowna.php">Strona główna</a>
</body>

</html>