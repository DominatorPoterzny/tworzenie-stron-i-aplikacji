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
    <?php if ($_SERVER['REQUEST_METHOD'] === "POST") { ?>
        <?= "Tekst z pola trim bez funkcji trim: "; ?> <br>
       <?= var_dump($_POST["trim"]); ?> <br>
       <?= "Tekst z pola trim z funkcją trim: "; ?> <br>
       <?= var_dump(trim($_POST["trim"])); ?> <br>

       <?= "Tekst z pola strip z funkcją stripslashes: "; ?> <br>
       <?= var_dump($_POST["strip"]); ?> <br>
       <?= "Tekst z pola strip z funkcją stripslashes: "; ?> <br>
       <?= var_dump(stripslashes($_POST["strip"])); ?> <br>

       <?= "Tekst z pola html z funkcją htmlspecialchars: "; ?> <br>
       <?= var_dump($_POST["html"]); ?> <br>
       <?= "Tekst z pola html z funkcją htmlspecialchars: "; ?> <br>
       <?= var_dump(htmlspecialchars($_POST["html"])); ?> <br>
   <?php } ?>
</body>

</html>