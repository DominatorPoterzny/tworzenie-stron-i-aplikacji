<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ol{
        list-style-type: upper-roman;
    }
</style>
<body>
   <?php $numbers = array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99),); rsort($numbers); ?> 
   <ol>
    <?php foreach($numbers as $x){ ?>
        <li><?= $x ?></li>
   <?php } ?>
   </ol>
</body>

</html>