<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        border-top: 4px dotted pink;
        border-bottom: 4px dotted pink;
    }
    h3{
        text-align: center;
        border-top: 2px dashed pink;
        border-bottom: 2px dashed  pink;
        font-family: cursive;
    }
</style>
<body>
    <?php $miesiac=rand(1,15) ?>
    <h1><?= $miesiac?></h1>
   <h3> <?php switch($miesiac){
    case 0:
    case 1:
    case 2:
        echo "I kwartał";
        break;
    case 3:
    case 4:
    case 5:
        echo "II kwartał";
        break;
    case 6:
    case 7:
    case 8:
        echo "III kwartał";
        break;
    case 9:
    case 10:
    case 11:
        echo "IV kwartał";
        break;
    default:
        echo "Błędny nuwer miesiąca";
   }?></h3>
</body>
</html>