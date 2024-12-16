<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <li> <?php print_r($_SERVER['SERVER_NAME']) ?> </li>
        <li> <?php print_r($_SERVER['HTTP_USER_AGENT']) ?> </li>

    </ol>
    <pre><?php print_r($_SERVER) ?></pre>

</body>

</html>