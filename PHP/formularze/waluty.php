<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>

            <?php echo 'Oto twój wybór:' . " ". $_POST['kwota'] . " " . $_POST['waluta'] ?>
        <?php } else { ?>
            <label for="kwota">Podaj kwote:</label>
            <input type="number" name="kwota" id="kwota"><br><br>
            <label for="waluta">Wybierz walute:</label>
            <select name="waluta" id="waluta">
                <option value=""></option>
                <option value="Dolar USA">Dolar USA</option>
                <option value="Euro">Euro</option>
                <option value="Frank szwajcarski">Frank szwajcarski</option>
                <option value="Funt szterling">Funt szterling</option>
            </select><br><br>
            <input type="submit" value="Wyślij">
        <?php } ?>
    </form>
</body>

</html>