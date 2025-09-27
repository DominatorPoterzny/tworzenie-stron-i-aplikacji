<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tablica_post.php" method="post">
        <input type="email" name="email" id="email" placeholder="email"><br>
        <input type="date" name="data" id="data"><br>
        <input type="month" name="miesiac" id="miesiac"><br>
        <input type="time" name="czas" id="czas"><br>
        <input type="week" name="tydz" id="tydz"><br>
        <input type="submit" value="wyślij" name="wyślij">
    </form>
    <pre><?php print_r($_POST) ?></pre>

</body>

</html>