<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="trim">Usuń "białe" znami</label>
        <input type="text" name="trim" id="trim" value=" Jan Kowalski"> <br>
        <label for="strip">Usuń ukośniki (backslash)</label>
        <input type="text" name="strip" id="strip" value="Spokojna 2\13"><br>
        <label for="html">Zmień znaki HTML na tzw. encje</label>
        <input type="text" name="html" id="html" value="<h1>Kielce</h1>"><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] === "POST") {
        echo "Tekst z pola trim bez funkcji trim: ";
        var_dump($_POST["trim"]);
        echo "Tekst z pola trim z funkcją trim: ";
        var_dump(trim($_POST["trim"]));

        echo "Tekst z pola strip z funkcją stripslashes: ";
        var_dump($_POST["strip"]);
        echo "Tekst z pola strip z funkcją stripslashes: ";
        var_dump(stripslashes($_POST["strip"]));

        echo "Tekst z pola html z funkcją htmlspecialchars: ";
        var_dump($_POST["html"]);
        echo "Tekst z pola html z funkcją htmlspecialchars: ";
        var_dump(htmlspecialchars($_POST["html"]));
    } ?>
</body>

</html>