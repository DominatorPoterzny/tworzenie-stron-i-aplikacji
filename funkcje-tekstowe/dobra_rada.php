<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("DOBRA_RADA", "Bez chleba, to się nie najesz.");?>
    <h3><?= DOBRA_RADA ?></h3>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strlen</strong>: <?= strlen(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>str_word_count</strong>: <?= str_word_count(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strrev</strong>: <?= strrev(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strpos</strong>: <?= strpos(DOBRA_RADA, "to") ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>str_replace</strong>: <?=str_replace("chleba","mięsa",DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strtolower</strong>: <?= strtolower(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strtoupper</strong>: <?= strtoupper(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>ucwords</strong>: <?= ucwords(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>trim</strong>: <?= trim(DOBRA_RADA) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strstr</strong>: <?= strstr(DOBRA_RADA, "nie") ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>substr</strong>: <?= substr(DOBRA_RADA, 10, 5) ?></p><br>
    <p>Do stałej DOBRA_RADA stosuję funkję <strong>strlen</strong>: <?= str_pad(DOBRA_RADA, 41, " -_-", STR_PAD_BOTH) ?></p><br>
</body>
</html>