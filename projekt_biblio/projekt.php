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

        /* Create two unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 150px;
            /* Should be removed. Only for demonstration */
        }

        .left {
            width: 25%;
            height: 150%;
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

        .link:hover {
            background-color: lightpink;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="column left" style="background-color:green;">
            <h2>Column 1</h2>
            
            <div class="contener1">
                <div class="link"> <a href="?podstrona=1">link 1</a> </div>
                <div class="link"> <a href="?podstrona=2">link 1</a> </div>
                <div class="link"> <a href="?podstrona=3">link 1</a> </div>
                <div class="link"> <a href="?podstrona=4">link 1</a> </div>
                <div class="link"> <a href="?podstrona=5">link 1</a> </div>
                <div class="link"> <a href="?podstrona=6">link 1</a> </div>
                <div class="link"> <a href="?podstrona=7">link 1</a> </div>
                <div class="link"> <a href="?podstrona=8">link 1</a> </div>
            </div>
        </div>
        <div class="column right" style="background-color:lightgreen;">
            <h2>Column 2</h2>
            <?php
            if (isset($_GET['podstrona'])) {
                if (file_exists('podstrona/' . $_GET['podstrona'] . '.php')) {
                    include 'podstrona/' . $_GET['podstrona'] . '.php';
                } else {
                    echo '<h1>Nie znaleziono żądanej strony</h1>';
                }
            } else {
                include 'podstrona/glowna.php';
            }
            ?>
        </div>
    </div>
</body>

</html>