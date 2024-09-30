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
    <?php ?>
</body>
</html>