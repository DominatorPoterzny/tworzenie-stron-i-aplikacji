<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            padding: 10px;
        }

        .left {
            width: 25%;
        }

        .right {
            width: 75%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .contener1 {
            display: flex;
            flex-direction: column;
        }

        .link {
            width: 100%;
            height: 100%;
            padding: 5px;
        }

        a:hover {
            background-color: lightpink;
            width: 100%;
        }

        a {
            text-decoration: none;
            padding: 10px;
        }

        .active {
            background-color: lightblue;
            width: 100%;
        }

        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<?php include 'podstrona/dbconn.php' ?>

<body>
    <div class="row">
        <div class="column left" style="background-color:green;">
            

            <div class="contener1">
                <a class="<?= ($_GET['podstrona'] ?? '') == 'glowny' ? 'active' : '' ?>" href="?podstrona=glowny">Strona <i>główna</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'czytelnicy' ? 'active' : '' ?>" href="?podstrona=czytelnicy">Tabela <i>czytelnicy</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?podstrona=dzialy">Tabela <i>dzialy</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'ksiazki' ? 'active' : '' ?>" href="?podstrona=ksiazki">Tabela <i>ksiazki</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'pracownicy' ? 'active' : '' ?>" href="?podstrona=pracownicy">Tabela <i>pracownicy</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'stanowiska' ? 'active' : '' ?>" href="?podstrona=stanowiska">Tabela <i>stanowiska</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == 'wypozyczenia' ? 'active' : '' ?>" href="?podstrona=wypozyczenia">Tabela <i>wypozyczenia</i></a>
                <a class="<?= ($_GET['podstrona'] ?? '') == '8' ? 'active' : '' ?>" href="?podstrona=8">link 1</a>
            </div>
        </div>
        <div class="column right" style="background-color:lightgreen;">
            
            <?php
            if (isset($_GET['podstrona'])) {
                if (file_exists('podstrona/' . $_GET['podstrona'] . '.php')) {
                    include 'podstrona/' . $_GET['podstrona'] . '.php';
                } else {
                    echo '<h1>Nie znaleziono żądanej strony</h1>';
                }
            } else {
                include 'podstrona/glowny.php';
            }
            ?>
        </div>
    </div>
</body>
<?php include 'podstrona/dbclose.php' ?>

</html>