<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre> <?php $parzyste = range(0, 12, 2);
            print_r($parzyste) ?></pre>

    <p><?php foreach ($parzyste as $key) {
        echo $key . " ";
        } ?></p>
    <p><?php $dziesiatki = range(-10, 100, 10);
        foreach ($dziesiatki as $y) {
            echo $y . " ";
        } ?></p>
    <p><?php $polowki = range(-5.5, 5.5, 0.5);
        foreach ($polowki as $x) {
            echo $x . " ";
        } ?></p>
    <p><?php $litery_od_em = range('m', 'u');
        foreach ($litery_od_em as $m) {
            echo $m . " ";
        } ?></p>
    <p><?php $litery_wstecz = range('X', 'E');
        foreach ($litery_wstecz as $e) {
            echo $e . " ";
        } ?></p>




</body>

</html>