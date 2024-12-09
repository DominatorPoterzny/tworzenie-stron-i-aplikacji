<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p {
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
        color: cornflowerblue;
        text-shadow: 1px 1px blue;
    }
</style>

<body>
    <p><?php $suma = 0;
        for ($i = 10; $i <= 99; $i++) {
            //echo $i . ", ";
            if ($i % 2 == 0) {
                echo $i . " | ";
                $suma += $i;
            }
        }
        ?></p>
    <p> Suma powyższych liczb jest równa <?= $suma ?></p>
</body>

</html>