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
        border: black 2px solid;
        padding: 20px;
    }
</style>

<body>

    <table>
        <caption> <?php echo (date("t"))  ?> </caption>
        <tr>
            <?php for ($i = 1; $i <= 31; $i++) {  ?>

                <td> <?php echo ($i) ?> </td>

                <?php if ($i % 7 == 0) { ?>
                    <tr> </tr>
                 <?php } ?>


            <?php } ?> 
        </tr>
    </table>
</body>

</html>