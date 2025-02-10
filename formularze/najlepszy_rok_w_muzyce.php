<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset><legend>Najlepszy rok w muzyce</legend>
        <form action="" method="post">
            <label for="rok">Wybierz najlepszy rok w muzyce:</label>
            <select name="rok" id="rok">
                <option value=""></option>
                <?php foreach(range(1500, 2020) as $a){ ?>
                    <option selected value="<?php $a ?>"> <?php $a ?> </option>
                <?php } ?>
            </select>
            <br>
            <input type="submit" value="Wybierz najlepszy rok w muzyce">
        </form>
    </fieldset>
</body>

</html>