<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $title = 'Pierwsza strona z PHP-em'
    ?>
    <?php
    $link_1= 'https://www.wp.pl'
    ?>
    <?php
    $link_2= 'https://www.onet.pl/'
    ?>
    <?php
    $link_3= 'https://wyborcza.pl/0,0.html'
    ?>
    
    <h1><?= $title ?></h1>
<ol style="list-style-type:decimal-leading-zero">
    <li><a href="<?= $link_1?>" target="blank">WP</a></li>
    <li><a href="<?= $link_2?>" target="blank">ONET</a></li>
    <li><a href="<?= $link_3?>" target="blank">WYBORCZA</a></li>
</ol>
</body>
</html>
