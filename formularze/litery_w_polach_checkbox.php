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
                //echo ('Te litery zostały wybrane:');
                //foreach ($litery as $r) {;
                    //if (isset($_POST[$r])) {
                     //   echo ($r) . (',');
                     if(!empty($_POST[$r])){

                        if(count($_POST) === 1){;
                            echo('Te litery zostały wybrane:');
                        }
                        else{
                            echo('Ta litera została wybrana:');
                        }
                     }
                     
                

                    } else {
                echo ('Żadna litera nie została wybrana');
            }
            //echo (implode(',', $litery));
                    
                //}
            
            
            ?>
        </form>
    </fieldset>
</body>

</html>