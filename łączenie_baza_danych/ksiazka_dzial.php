<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- SELECT k.tytul, k.imie, k.nazwisko, k.cena, k.wydawnictwo, k.miejsce_wyd, k.rok_wyd, k.Objetosc_ks, k.Id_dzial, d.id_dzial, d.nazwa from ksiazki k INNER JOIN dzialy d ON k.Id_dzial = d.Id_dzial; -->
    <?php
    $servername = "localhost";
    $username = "kolomanski";
    $password = "12345678";
    $database = "kolomanski";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    <?php
    $querry = mysqli_query($con, 'SELECT ksiazki.tytul, ksiazki.imie, ksiazki.nazwisko, ksiazki.cena, ksiazki.wydawnictwo, ksiazki.miejsce_wyd, ksiazki.rok_wyd, ksiazki.Objetosc_ks, dzialy.id_dzial, dzialy.nazwa from ksiazki JOIN dzialy  ON ksiazki.Id_dzial = dzialy.Id_dzial;');
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <p><q><?= $row['tytul'] ?></q> - <?= $row['imie'] ?> <?= $row['nazwisko'] ?>, <?= $row['wydawnictwo'] ?> (<?= $row['miejsce_wyd'] ?> <?= $row['rok_wyd'] ?>), Str. <?= $row['Objetosc_ks'] ?>. Cena:<?= $row['cena'] ?> zł (dział: <?= $row['nazwa'] ?>)</p>
    <?php }
    } else {
        echo "0 results";
    }

    mysqli_close($con);
    ?>
</body>

</html>