<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $r = 6?>
    <p style="font-family: Arial; border: 4px double lightsalmon; text-align: center;">Obwód okręgu o promieniu <?= $r?> jest równy <?= round(2*pi()*$r, 2)?></p>
</body>
</html>