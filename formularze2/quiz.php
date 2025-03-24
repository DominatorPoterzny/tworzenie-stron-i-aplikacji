<?php session_start() ?>
<?php
if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
    $_SESSION['score'] = 0;
};

?>
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
    ];
    $totalQuestions = count($questions);
    ?>
    <!-- to robimy tylko raz, po rozpoczęciu sesji: -->


    <!-- // formularz: -->
    <form method="POST">
        <div>
            <h1>Quiz o wszystkim</h1>
            <p>Pytanie <?= $_SESSION['question_index'] ?>/4</p>
        </div>


        <?php if (isset($_POST['check'])) {
                if ($_POST['odp'] == $questions['0']['1']);
                print_r($_POST['odp']);
                print_r($questions['0']['0']);
                print_r($questions['0']['1']);
            // sprawdzamy odpowiedź
            // wyświetlamy podsumowanie danego pytania
            // i dotychczas zdobyte punkty
            // zwiększamy numer pytania o jeden
            if ($_SESSION['question_index'] < $totalQuestions) {
                // wyświetlamy przycisk "Następne" przenoszący nas do kolejnego pytania
            }
        } ?>
        <?php
        if (isset($_POST['next']) || $_SESSION['question_index'] == 0) { ?>
            <?php print_r($questions['0']['0']) ?>
            <input type="text" name="odp" id="odp">
            <input type="submit" value="zjedz" name="check">
            <!-- // wyświetlamy input do udzielenia odpowiedzi
            // wyświetlamy przycisk Sprawdź -->
        <?php } ?>
    </form>
    <?php
    // gdy odpowiemy na ostatnie pytanie:
    if ($_SESSION['question_index'] >= $totalQuestions) {
        // usuń zmienne sesji
        // wyświetl podsumowanie całego quizu
    }
    ?>


</body>

</html>