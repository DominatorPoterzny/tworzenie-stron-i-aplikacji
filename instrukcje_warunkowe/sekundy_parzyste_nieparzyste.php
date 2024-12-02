<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p {
        font-size: 220px;
        font-weight: bold;
        text-align: center;
        border: 20px solid <?= $kolor ?>;
        color: <?= $kolor ?>;
    }
</style>

<body>
    <?php $liczba = date("s"); ?>
    <?php $kolor = $liczba % 2 == 0 ? 'red' : 'blue' ?>
    <p style="color: <?= $kolor ?>; border: 20px solid <?= $kolor ?>;"><?php echo (date("H:i:s")) ?></p>
</body>

</html>