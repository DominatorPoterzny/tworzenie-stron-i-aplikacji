<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    legend {
        border-left: limegreen solid 2px;
        border-right: limegreen solid 2px;
    }

    fieldset {
       border: limegreen solid 2px;

    }
</style>

<body>
    <form action="" method="post">
        
        

            <fieldset>
                <legend>Najlepszy rok w muzyce</legend>

                <label for="rok">Wybierz najlepszy rok w muzyce:</label>
                <select name="rok" id="rok" required>
                    <option value=""></option>
                    <?php foreach (range(1500, 2020) as $a) {
                        if (!empty($_POST) && in_array($a, $_POST)) {
                            $zaznaczona = 'selected';
                        } else {
                            $zaznaczona = '';
                        } ?>
                        <option <?= $zaznaczona ?> value="<?= $a ?> "> <?= $a ?></option>
                    <?php } ?>
                </select>
                <br>
                <input type="submit" value="Wybierz najlepszy rok w muzyce"><br>
                


                <?php if (!empty($_POST)) { ?>
                    <p>Według ciebie najlepszym rokiem w muzyce był rok: <?= $_POST['rok'] ?></p>

                <?php } ?>

            </fieldset>

    </form>
</body>

</html>