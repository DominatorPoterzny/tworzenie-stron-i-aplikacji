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
        border: solid 1px lightgray;
        padding: 7px;
    }
</style>

<body>

    <table>
        <caption>Oceny</caption>

        <?php foreach (range(1, 50) as $a) { ?>

            <tr>
                <td><label for="uczen<?= $a ?>">Uczeń <?= $a ?></label></td>
                <td><input type="text" name="uczen<?= $a ?>" id="uczen<?= $a ?>"></td>
            </tr>
        <?php  } ?>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Zapisz"></td>
        </tr>
    </table>
</body>

</html>