<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $losowa = rand(1,30)?>
    <h2 style=""><?= $losowa ?></h2>
    <?php if($losowa >= 20) {?>
         <h4 style="">Wylosowana liczba jest większa lub równa 20</h4>
    <?php} 
        if($losowa%2==0){?>
        <h4 style="">Wylosowana liczba jest parzysta</h4>
    <?php}  else{?>
        <h4 style="">Wylosowana liczba jest nie parzysta</h4>
    <?php}
      if($losowa < 10){?>
        <h4>Pierwsza dziesiątka</h4>
     <?php} 
     elseif ($losowa>21)
     {?> 
     <h4>Trzecia dziesiątka</h4> 
     <?php}
    else{?>
        <h4>Druga dziesiątka</h4>
        <?php
    }
    ?>
     
</body>
</html>