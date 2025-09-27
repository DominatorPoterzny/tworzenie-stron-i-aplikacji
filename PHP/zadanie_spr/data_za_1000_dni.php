<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="border: 2px dashed lightpink; padding: 20px; color:lightpink;"> Dzisiejsza data: <strong><?= date("d.m.Y") ?></strong></p> <br>
    <p style="border: 2px dashed lightcoral; padding: 20px; color:lightcoral;">Data za 1000 dni: <strong><?= date("d.m.Y", strtotime("+1000 day")) ?></strong></p> <br>

</body>

</html>