<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuwie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Obuwie męskie</h1>
    </header>
    <main>
        <h2>Zamówienie</h2>
        <!-- skrypt3 -->
        <?php
            $connect = mysqli_connect('localhost','root','','obuwie');
            $model = $_POST['model'];
            $liczba_par = $_POST['liczba_par'];
            $rozmiar = $_POST['rozmiar'];
            
            $result3 = mysqli_query($connect,"SELECT nazwa,cena,kolor,kod_produktu,material,nazwa_pliku FROM buty JOIN produkt ON buty.model=produkt.model WHERE buty.model = '$model';");
            while($row = mysqli_fetch_assoc($result3)){ ?>
                <img src="<?= $row['nazwa_pliku'] ?>" alt="but męski">
                <h2><?= $row['nazwa'] ?></h2>
                <p>cena za <?= $liczba_par ?> par: <?= $liczba_par * $row['cena'] ?> zł</p>
                <p>Szczegóły produktu: <?= $row['kolor'] ?> <?= $row['material'] ?></p>
                <p>Rozmiar: <?= $rozmiar ?></p>
          <?php  }
        ?>
        <?php mysqli_close($connect) ?>
        <a href="index.php">Strona główna</a>
    </main>
    <footer>
        <p>Autor strony: Potężny Dominator</p>
    </footer>
</body>
</html>