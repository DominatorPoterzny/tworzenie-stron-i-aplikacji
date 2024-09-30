<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $x =5;
    $y = 15; ?>
    <fieldset><legend>ZADANIE.1</legend>
    <p>Wynik dodawania 5 i 15 wynosi <?= $x+$y ?></p>
    <p>Wynik odejmowania 5 i 15 wynosi <?= $x-$y ?></p>
    <p>Wynik mnożenia 5 i 15 wynosi <?= $x*$y ?></p>
    <p>Wynik dzielenia 5 i 15 wynosi <?= $x/$y ?></p>
    <p>Wynik reszty z dzielenia 5 i 15 wynosi <?= $x%$y ?></p>
    </fieldset>
    <fieldset><legend>ZADANIE.2</legend>
    <?php $a = 4; $b = 35;?>
    <p>Obwód prostokąta o bokach długości 4 i 35 wynosi <?= 2*$a+2*$b ?> j<sup>2</sup></p>
    <p>Pole prostokąta o bokach długości 4 i 35 wynosi <?= $a*$b ?> j<sup>2</sup></p>
    </fieldset>
    <fieldset> <legend>ZADANIE.3</legend>
    <?php $r = 16; $alfa = 93; ?>
    <p>Obwód koła o promieniu 16 jest równy <?= round(2*pi()*$r, 4)?></p>
    <p>Pole koła o promieniu 16 jest równy <?= round(pi()*$r**2, 4)?> j<sup>2</sup></p>
    <p>Pole wycinka koła o promieniu 16 i o kącie środkowym 93&deg; jest równy <?= round(pi()*$r**2*$alfa/360, 4)?> j<sup>2</sup></p>
    </fieldset>
</body>
</html>