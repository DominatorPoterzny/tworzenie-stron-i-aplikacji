<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $a = range('a', 'z') ?>
    <fieldset>
        <legend>Alfabet</legend>

        <form action="">
            <?php foreach ($a as $r) { ?>

                <input type="checkbox" name="$r[]" id="$r">
                <label for="$r"> <?= $r ?> </label>



            <?php } ?>
            <br>
            <input type="submit" value="Wyślij">
        </form>
    </fieldset>
</body>

</html>