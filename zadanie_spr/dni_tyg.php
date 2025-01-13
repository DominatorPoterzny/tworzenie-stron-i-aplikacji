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
        border: solid 2px black;
        padding: 20px;
    }
</style>

<body>
    <?php $tyg = array(
        1 => "pon",
        2 => "wto",
        3 => "śro",
        4 => "czw",
        5 => "pią",
        6 => "sob",
        7 => "nie",
    ); ?>
    <table>
        <tr> <?php
                foreach ($tyg as $x => $y) { ?>
                <td> <?= $y ?> </td>
            <?php }
                if ($tyg == 2) {
                } ?>
        </tr>

    </table>
</body>

</html>