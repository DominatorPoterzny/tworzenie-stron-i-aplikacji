<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <div class="kontener">
        <nav>
            <div class="blok1" onclick="pokazblok1()">Baza</div>
            <div class="blok2" onclick="pokazblok2()">Opisy</div>
            <div class="blok3" onclick="pokazblok3()">Galeria</div>
        </nav>
        <main>
            <section class="sekcja1">
                <h3>Baza Smoków</h3>
                <form action="" method="POST">
                    <select name="pochodzenie" id="smoki">
                        <?php
                        $connect = mysqli_connect("localhost", "root", "", "smoki");
                        $result = mysqli_query($connect, "SELECT DISTINCT pochodzenie FROM smok ORDER BY pochodzenie asc;");

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<option name='{$row['pochodzenie']}'>{$row['pochodzenie']}</option>";
                          };
                       

                        ?>
                    </select>
                    <!-- <input type="submit" value="Szukaj" name="szukaj"> -->
                    <button name="submit">Szukaj</button>
                </form>
                <table>
                    <tr>
                        <th>Nazwa</th>
                        <th>Długość</th>
                        <th>Szerokość</th>
                        <?php
                        if (isset($_POST["submit"])) {
                            $pochodzenie = $_POST["pochodzenie"];
                            $result2 = mysqli_query($connect, "SELECT nazwa,dlugosc,szerokosc FROM smok WHERE pochodzenie = '$pochodzenie';");
                            while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <tr>
                        <td><?= $row['nazwa'] ?></td>
                        <td><?= $row['dlugosc'] ?></td>
                        <td><?= $row['szerokosc'] ?></td>
                    </tr>

            <?php }
                        } ?>
            </tr>
                </table>
            </section>
            <section class="sekcja2">
                <h3>Opisy smoków</h3>
                <dl>
                    <dt>Smok czerwony</dt>
                    <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>
                    <dt>Smok zielony</dt>
                    <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.</dd>
                    <dt>Smok niebieski</dt>
                    <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>

                </dl>
            </section>
            <section class="sekcja3">
                <h3>Galeria</h3>
                <img src="smok1.JPG" alt="Smok czerwony">
                <img src="smok2.JPG" alt="Smok wielki">
                <img src="smok3.JPG" alt="Skrzydlaty łaciaty">
            </section>
        </main>
    </div>
    <footer>
        <p>Stronę opracował: Potężny Dominator</p>
    </footer>
</body>

</html>
<script src="main.js"></script>