<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
td,th{
        padding: 5px;
        border: solid 1px black;
    }
td{
        text-align: center;
    }
table{
        border-collapse: collapse;
    }
</style>
<body>
    <?php $haslo1 ='mbank.pl'?>
    <?php $haslo2 ='rmbank.pl'?>
    <table>
        <tr> <th><?= $haslo1 ?></th> <th><?= $haslo2 ?></th></tr>
        <tr><td colspan="2"><?php if($haslo1==$haslo2){echo "Hasła są takie same";} 
        else {echo "Hasła są różne";}?></td></tr>
    </table>
</body>
</html>