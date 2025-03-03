<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset{
        border-width: 3px;
        border-color: pink;
    }
</style>
<body>
    
    
    <form method="post">
        <fieldset>
            <legend>Miesiące</legend>
            <?php foreach (range("Styczeń", "Grudzień") as $b) {
                if (!empty($_POST) && in_array($b, $_POST)) {
                    $zaznaczona = 'checked';
                } else {
                    $zaznaczona = '';
                } ?>

                <label for="<?= $b ?>"><?= $b ?></label>
                <input type="checkbox" name="<?= $b ?>" id="<?= $b ?>" <?= $zaznaczona ?>>

            <?php   } ?>
            <br>
            <input type="submit" value="Wybierz">
            <?php if (!empty($_POST)) {
                if (count($_POST) == 1) {
            ?> <p>Ten miesiąc został wybrany: <?= implode('', $_POST) ?></p> <?php
            } elseif (!empty($_POST)) {
               ?> <p>Te miesiace zostały wybrane: <?= implode(', ', $_POST) ?></p> <?php
             } else {
                 ?> <p>Żaden miesiac nie został wybrany</p> <?php
             } } ?>

        </fieldset>
    </form>
</body>

</html>