<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPONY</title>
    <link rel="stylesheet" href="INF.03-11-25.06-SG.css">
</head>
<?php
header('refresh: 10;');
$con = mysqli_connect("localhost", "root", "", "opony");
?>

<body>
    <main>
        <aside>
            <p><a href="https://opona/pl/">więcej ofert</a></p>
            <?php
            $querry = "SELECT * FROM opony LIMIT 10;";
            $result = mysqli_query($con, $querry);
            while ($row = mysqli_fetch_assoc($result)) {;
                if ($row['sezon'] = "letnia") {;
                    $obraz = 'lato.png';
                };

                if ($row['sezon'] = "zimowa") {;
                    $obraz = 'zima.png';
                };

                if ($row['sezon'] = "uniwersalna") {;
                    $obraz = 'uniwer.png';
                };
            ?>
                <div class="opona">
                    <img src="<?php $obraz ?>" alt="">
                    <h4>Opona: <?php echo $row['producent'] ?> <?php echo $row['model'] ?></h4>
                    <h3>Cena: <?php echo $row['cena'] ?> </h3>
                </div>
            <?php  } ?>
        </aside>
        <div class="kontener">
            <section class="pierwsza">
                <img src="./opona.png" alt="Opona">
                <h2>Opona dnia</h2>
                
            </section>

            <section class="druga">
                <h2>Najnowsze zamówienie</h2>
            </section>
        </div>
    </main>
    <footer>
        <p>Strone wykonał: Twój tata</p>
    </footer>
</body>
<?php mysqli_close($con) ?>

</html>