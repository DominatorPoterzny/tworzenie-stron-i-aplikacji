<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    td {
        background-color: greenyellow;
        border: green 1px solid;
        padding: 10px;
    }
</style>

<body>
    <?php $i = 1 ?>
    <table>
        <tr>
            <?php do {  ?>
                <td>To jest kolumna numer <?= $i ?></td>
            <?php $i++;
            } while ($i <= 5) ?>
        </tr>
    </table>

</body>

</html>