<?php session_start() ?>
<?php $questions = [
    0 => ["Stolica Włoch to:", "Rzym"],
    1 => ["Ile wynosi 8 + 12?", "20"],
    2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
    3 => ["Który kontynent jest najmniejszy?", "Australia"]
]; ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!isset($_SESSION['pytanie'])) {
        $_SESSION['pytanie'] = 0;
        $_SESSION['wynik'] = 0;
    };
    $totalQuestions = count($questions) ?>



    <form method="POST">
        <!-- // wyświetl numer pytania -->
        <p>Pytanie <?= $_SESSION['pytanie'] + 1 ?>/<?= $totalQuestions ?> </p>
        <!-- // wyświetl treść pytania -->
        <label><?= $questions[$_SESSION['pytanie']]['0'] ?></label>

        <?php if (isset($_POST['next']) || $_SESSION['pytanie'] == 0) {
            // wyświetlamy input do udzielenia odpowiedzi
        ?>
            <input type="text" name="pytanie" id="<?= $_SESSION['pytanie'] ?>">
            <!-- // wyświetlamy przycisk Sprawdź -->
            <input type="submit" value="Sprawdź" name="check">
        <?php } ?>

        <?php if (isset($_POST['check'])) {
            // sprawdzamy odpowiedź
            if ($_POST['pytanie'] == $questions[$_SESSION['pytanie']]['1']) { ?>
                <p>Twoja odpowiedź: <?php print_r($_POST['pytanie']) ?> </p>
                <p>Poprawna odpowiedź:<?php print_r($questions[$_SESSION['pytanie']]['1']) ?> </p>
                <?php $_SESSION['wynik']++ ?>
                <p>Wszystkie punkty:<?php print_r($_SESSION['wynik']) ?> </p>
                <?php
                $_SESSION['pytanie']++; ?>

            <?php  } else { ?>
                <p>Twoja odpowiedź: <?php print_r($_POST['pytanie']) ?> </p>
                <p>Poprawna odpowiedź:<?php print_r($questions[$_SESSION['pytanie']]['1']) ?> </p>
                <p>Wszystkie punkty:<?php print_r($_SESSION['wynik']) ?> </p>
            <?php $_SESSION['pytanie']++;
            }
            // wyświetlamy podsumowanie danego pytania
            // i dotychczas zdobyte punkty
            // zwiększamy numer pytania o jeden
            ?>
            <!-- <p>Twoja odpowiedź: <?php print_r($_POST[$_SESSION['pytanie']]) ?> </p>
            <p>Poprawna odpowiedź:<?php print_r($questions[$_SESSION['pytanie']]['1']) ?> </p>
            <p>Wszystkie punkty:<?php print_r($_SESSION['wynik']) ?> </p> -->

            <?php if ($_SESSION['pytanie'] < $totalQuestions) { ?>
                <!-- // wyświetlamy przycisk "Następne" przenoszący nas do kolejnego pytania -->
                <input type="submit" value="Następne" name="next">
        <?php        }
        } ?>
    </form>


    <?php if ($_SESSION['pytanie'] >= $totalQuestions) {
        // usuń zmienne sesji
        session_destroy(); ?>
        <!-- // wyświetl podsumowanie całego quizu -->
        <a href="/formularze2/quiz.php">Rozpocznij ponownie</a>
    <?php } ?>


</body>

</html>