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
        width: 100%;
        table-layout: fixed;
    }

    td {
        background-color: aliceblue;
        border: dodgerblue solid 1px;
        padding: 10px 0px 10px 0px;
        color: blue;
        text-align: center;
    }
</style>

<body>
    <?php $r = range(0, 10);
    shuffle($r); ?>
    <table>
        <tr>
            <?php foreach ($r as $x) { ?>
                <td><?= $x ?></td>
            <?php } ?>
        </tr>
    </table>

</body>

</html>