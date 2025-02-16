<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    label {
        padding-right: 15px;
    }

    fieldset {
        border-color: blue;
        border-width: 2px;

    }
</style>
<!-- if ($_SERVER['REQUEST_METHOD'] === 'POST') {
foreach ($litery as $r) {
if (isset($_POST[$r])) {
echo "wybrane litery:";
}
}
} -->

<body>

   





    <fieldset style="border: solid, 2px, blue">
        <legend>Alfabet</legend>
        <form action="" method="POST">
            <?php
            foreach (range('a', 'z') as $litera) {
                if (!empty($_POST) && in_array($litera, $_POST)) {
                    $zaznaczona = 'checked';
                } else {
                    $zaznaczona = '';
                }
            ?>
                <input <?= $zaznaczona ?> type="checkbox" name="litera_<?= $litera ?>" id="litera_<?= $litera ?>" value="<?= $litera ?>">
                <label for="litera_<?= $litera ?>" style="padding-right: 15px"><?= $litera ?></label>
            <?php }
            ?>
            <br> <input type="submit" value="Wybierz">
            <?php
            if (!empty($_POST)) {
                if (count($_POST) == 1) {
            ?> <p>Ta litera została wybrana: <?= implode('', $_POST) ?></p> <?php
            } elseif (!empty($_POST)) {
               ?> <p>Te litery zostały wybrane: <?= implode(', ', $_POST) ?></p> <?php
             } else {
                 ?> <p>Żadna litera nie została wybrana</p> <?php
             }
         }
        ?>
        </form>
    </fieldset>
</body>

</html>