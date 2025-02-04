<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    label{
        padding-right: 15px;
    }
    fieldset{
        border-color: blue;
        border-width: 2px;
       
    }
</style>

<body>

    <?php $litery = range('a', 'z') ?>
    <fieldset>
        <legend>Alfabet</legend>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php foreach ($litery as $r) { ?>

                <input type="checkbox" name="<?= $r ?>[]" id="<?= $r ?>">
                <label for="<?= $r ?>"> <?= $r ?> </label>

            <?php } ?>
            <br>
            <input type="submit" value="Wybierz">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                foreach ($litery as $r) {
                    if (isset($_POST[$r])) {
                        echo ('wybrane litery');
                    }
                }
            } 
            ?>
        </form>
    </fieldset>
</body>

</html>