<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $losowa=rand(1,30)?>
    <h2><?= $losowa?></h2>
    <?php if ($losowa>=20) {?>
        <h4>Wylosowana liczba jest większa lub równa 20</h4>
    <?php } if ($losowa%2==0){?><h4></h4> <?php}?>
</body>
</html>