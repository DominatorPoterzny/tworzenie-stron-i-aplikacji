<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #wylosowane {
        text-align: center;
        color: darkorchid;
    }

    .wieksze {
        text-align: center;
        color: magenta;
    }

    .parzysta {
        text-align: center;
        color: navy;
    }
    .dziesiec{
        text-align: center;
        color: deeppink;
    }
</style>

<body>
    <?php $losowa = rand(1, 30) ?>
    <h2 id="wylosowane"><?= $losowa ?></h2>
    <?php if ($losowa >= 20) { ?>
        <h4 class="wieksze">Wylosowana liczba jest większa lub równa 20</h4>
    <?php } if ($losowa % 2 == 0) { ?>
        <h4 class="parzysta">Liczba jest parzysta</h4>
    <?php } else { ?>
        <h4 class="parzysta">Liczba nie jest parzysta</h4>
    <?php } if ($losowa < 10) { ?>
        <h4 class="dziesiec">Pierwsza dziesiątka</h4>
    <?php } elseif ($losowa > 21) { ?>
        <h4 class="dziesiec">Trzecia dziesiątka</h4>
    <?php } else { ?>
        <h4 class="dziesiec">Druga dziesiątka</h4>
    <?php } ?>

</body>

</html>