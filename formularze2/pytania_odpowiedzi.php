<?php

$questions = [
    0 => ["Stolica Włoch to:", "Rzym"],
    1 => ["Ile wynosi 8 + 12?", "20"],
    2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
    3 => ["Który kontynent jest najmniejszy?", "Australia"]
]; ?>

$_SESSION['pytanie'] = 0;
$_SESSION['punkt'] = 0
?>

<div>
    <form action="" method="post">
        <?php if ($_SESSION['pytanie'] = 1) { ?>
            <h2>Quiz o wszystkim</h2>
            <p>Pytanie <?= $_SESSION['pytanie'] ?>/4 </p>
            <?php print_r($questions['0']['0']) ?>
            <input type="text" name="odp" id="odp">
            <input type="submit" value="Sprawdź" name="spr">
            <?php if (isset($_POST['spr'])) {
                print_r($questions['0']['0']);
                echo "<br>";
                print_r($questions['0']['1']);
                echo "<br>";
                print_r($_POST['odp']);
                echo "<br>";
                $_SESSION['pytanie']++;
            } else { ?>
                <input type="submit" value="Nastepne" name="next">
            <?php } ?>

        <?php } ?>

    </form>
</div>