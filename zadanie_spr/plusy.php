<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $plusy = rand(0, 10) ?>
    <blockquote>
        <?= $plusy  ?>

    </blockquote>
    <blockquote>
        <?php for ($i = 0; $i < $plusy; $i++) {
            echo ("+");
        } ?>
        <?php if ($i == 0) {
            echo "Wartość jest poza zakresem <1,9>";
        }  ?>
        <?php if ($i == 10) {
            echo ("Wartość jest poza zakresem <1,9>");
        }  ?>
    </blockquote>
</body>

</html>