<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $questions = [
        0 => ["Stolica Włoch to:", "Rzym"],
        1 => ["Ile wynosi 8 + 12?", "20"],
        2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
        3 => ["Który kontynent jest najmniejszy?", "Australia"]
    ]; ?>
    <?php
    $_SESSION['pytanie'] = 1;
    $_SESSION['punkt'] = 0
    ?>

    <div>
        <form action="" method="post">
            <?php if($_SESSION['pytanie'] = 1){ ?>
                <h2>Quiz o wszystkim</h2>
            <p>Pytanie <?= $_SESSION['pytanie'] ?>/4 </p>
            <?php print_r($questions['0']['0']) ?>
            <input type="text" name="odp" id="odp">
            <input type="submit" value="Sprawdź" name="spr">

           <?php } ?>
            
        </form>
    </div>
</body>

</html>