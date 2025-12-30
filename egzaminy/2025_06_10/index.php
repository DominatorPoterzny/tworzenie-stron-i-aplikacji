<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section class="lewa">
            <table>
                <tr>
                    <th>Kurs</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>

                <!-- skrypt1 -->
                <?php $connect = mysqli_connect('localhost', 'root', '', 'szkolenia');
                $result = mysqli_query($connect, "SELECT kod,nazwa,cena FROM kursy ORDER BY cena ASC;");
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><img src='<?= $row['kod'] ?>.jpg' alt="kurs"></td>
                        <td><?= $row['nazwa'] ?></td>
                        <td><?= $row['cena'] ?></td>
                    </tr>
                <?php  } ?>

            </table>
        </section>
        <section class="prawa">
            <h2>Zapisy na kursy</h2>
            <form action="index.php" method="POST">
                <label for="imie">Imię</label><br>
                <input type="text" name="imie"><br>
                <label for="nazwisko">Nazwisko</label><br>
                <input type="text" name="nazwisko"><br>
                <label for="wiek">Wiek</label><br>
                <input type="number" name="wiek"><br>
                <label for="rodzaj">Rodzaj kursu</label><br>
                <select name="rodzaj"><br>
                    <!-- skrypt2 -->
                    <?php
                    $result2 = mysqli_query($connect, "SELECT nazwa FROM kursy;");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<option value='$row[nazwa]'>$row[nazwa]</option>";
                    }
                    ?>

                </select><br>
                <input type="submit" value="Dodaj dane" name="dodaj">
                <!-- skrytpt3 -->
                <?php
                if (isset($_POST['dodaj']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['wiek'])) {
                    $result3 = mysqli_query($connect, "INSERT INTO uczestnicy( imie, nazwisko, wiek) VALUES ('$_POST[imie]','$_POST[nazwisko]','$_POST[wiek]')");
                    echo "<p>Dane uczestnika $_POST[imie] $_POST[nazwisko] zostały dodane</p>";
                } else {
                    echo "<p>Wprowadź wszystkie dane</p>";
                }
                ?>
                <?php  mysqli_close($connect)  ?>
            </form>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: Potężny Dominator</p>
    </footer>
</body>

</html>