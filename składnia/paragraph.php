<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 97;
    $b = 3.14;
    $c = 'PHP'
     ?>
     <h3 style="color: red"><?= $a?> jest liczbą pierwszą</h3>
     <p style="color: #336ee1">Liczba Pi zaokrąglona do dwóch miejsc po przecinku: <?= $b ?></p>
     <div style="color: green; text-decoration: overline;"><u> <?= $c ?> to język skryptowy wykonany po stronie serwera</u></div>
</body>
</html>