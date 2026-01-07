<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Zdjęcia</h1>
    </header>
    <section class="lewy">
        <h2>Tematy zdjęć</h2>
        <ol>
            <li>Zwierzęta</li>
            <li>Krajobrazy</li>
            <li>Miasta</li>
            <li>Przyroda</li>
            <li>Samochody</li>
        </ol>
    </section>
    <section class="srodek">
        <!-- skrypt1 -->
        <?php
        $connet = mysqli_connect('localhost', 'root', '', 'galeria');
        $result = mysqli_query($connet, "SELECT tytul,plik,polubienia,imie,nazwisko FROM zdjecia JOIN autorzy ON zdjecia.autorzy_id = autorzy.id ORDER BY nazwisko ASC;");
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div>
                <img src='<?= $row['plik'] ?>' alt="zdjęcie">
                <h3><?= $row['tytul'] ?></h3>
                <?php if ($row['polubienia'] > 40) {
                    echo " <p>Autor:$row[imie] $row[nazwisko].<br> Wiele osób polubiło ten obraz</p>";
                } else {
                    echo "<p>Autor:$row[imie] $row[nazwisko]</p>";
                } ?>
                <a href="<?= $row['plik'] ?>" download>Pobierz</a>
            </div>

        <?php          }
        ?>
    </section>
    <section class="prawy">
        <h2>Najbardziej lubiane</h2>
        <!-- skrypt2 -->
        <?php
        $result2 = mysqli_query($connet, "SELECT tytul,plik FROM zdjecia WHERE polubienia >= 100;");
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<img src='$row[plik]' alt='$row[tytul]'>";
        }
        ?>
        <?php mysqli_close($connet) ?>
        <strong>Zobacz wszystkie nasze zdjęcia</strong>
    </section>
    <footer>
        <h5>Stronę wykonał: Potężny Dominator</h5>
    </footer>

</body>

</html>