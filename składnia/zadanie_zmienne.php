<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = ' ESSA z php'; 
    $licz = 100;
    $float = 10.693;
    $bool = true;
    ?>
    <?php echo ("echo dla ciągów znaków: $str") ?>
    <br>
    <?php echo ("echo dla liczb całkowitych: $licz") ?>
    <br>
    <?php echo ("echo dla liczb rzeczywistych (float): $float") ?>
    <br>
    <?php echo ("echo dla bool: $bool") ?>
    <br><br><br>

    <?php echo ("var_dump dla ciągów znaków: "); var_dump($str) ;?>
    <br>
    <?php echo ("var_dump dla ciągów całkowitych: "); var_dump($licz) ;?>
    <br>
    <?php echo ("var_dump dla ciągów rzeczywistych: "); var_dump($float) ;?>
    <br>
    <?php echo ("var_dump dla bool: "); var_dump($bool) ;?>
    <br> <br> <br>
    <?php 
    define("LATA", 1939);
    define("IMIE", "adam");
    ?>
    <p> print dla pierwszej stałej: <?php print LATA ?></p>
    <p>print dla drugiej stałej: <?php print IMIE ?></p>
    <br>
    <p>var_export dla pierwszej stałej: <?php var_export(LATA);?></p>
    <p>var_export dla drugiej stałej: <?php var_export(IMIE) ?></p>
</body>
</html>