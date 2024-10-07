<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $s = "Bo cierpienie, proszę pana, to wielka rzecz. W cierpieniu jest pewna idea."?>
    <p><?= $s ?></p> <br>
    <blockquote> <?= strtoupper($s) ?></blockquote>
</body>
</html>