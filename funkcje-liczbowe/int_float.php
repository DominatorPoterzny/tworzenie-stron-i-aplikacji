<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $x = 154; $y = 13.69; $dodaj = "59.85" + 100 ?>
    <p>Zmienna Liczba1 x ma wartość 154 a funkcja is_int zwraca dla niej wynik <?=var_dump(is_int($x)) ?></p>
    <p>Zmienna Liczba1 x ma wartość 154 a funkcja is_int zwraca dla niej wynik <?=var_dump(is_float($x)) ?></p>
    <p>Zmienna Liczba2 y ma wartość 13.69 a funkcja is_int zwraca dla niej wynik <?=var_dump(is_int($y)) ?></p>
    <p>Zmienna Liczba2 y ma wartość 13.69 a funkcja is_int zwraca dla niej wynik <?=var_dump(is_float($y)) ?></p>
    <hr>
    <p>Zmienna dodaj ma wartość "59.85" + 100 a funkcja is_numeric zwraca dla niej wynik <?=var_dump(is_numeric($dodaj)) ?> </p>
    <hr>
    <p>Stała PHP_INT_MAX ma wartość <?=  var_dump(PHP_INT_MAX)?></p>
    <p>Stała PHP_INT_MIN ma wartość <?=  var_dump(PHP_INT_MIN)?></p>
    <p>Stała PHP_INT_SIZE ma wartość <?=  var_dump(PHP_INT_SIZE)?></p>
    <p>Stała PHP_FLOAT_MAX ma wartość <?=  var_dump(PHP_FLOAT_MAX)?></p>
    <p>Stała PHP_FLOAT_MIN ma wartość <?=  var_dump(PHP_FLOAT_MIN)?></p>
    <p>Stała PHP_FLOAT_DIG ma wartość <?=  var_dump(PHP_FLOAT_DIG)?></p>
    <p>Stała PHP_FLOAT_EPSILON ma wartość <?=  var_dump(PHP_FLOAT_EPSILON)?></p>
</body>
</html>