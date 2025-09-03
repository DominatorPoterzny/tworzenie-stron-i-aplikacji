<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        background-color: lightgray;
        border: gray 1px solid;
        padding: 10px;
    }
    table{
        border-collapse: collapse;
    }
</style>
<body>
    <table>
        <?php $i=1?>
    <?php while($i<=5) { ?>
        <tr><td>To jest wiersz numer <?= $i ?> </td></tr>
    <?php $i++; } ?>
    </table>
    
</body>
</html>