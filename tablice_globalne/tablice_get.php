<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tablice_get.php" method="get">
        <input type="text" name="login" id="login" placeholder="login"><br>
        <input type="password" name="password" id="password" placeholder="password"><br>
        <input type="submit" value="wyślij" name="send">
    </form>
    <hr>
    <pre><?php print_r($_GET) ?></pre>

</body>

</html>