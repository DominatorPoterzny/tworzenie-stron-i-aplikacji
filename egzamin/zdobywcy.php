<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>
    <nav>
        <a href="./zdjęcia/kw1.png">KWERENDA 1</a>
        <a href="./zdjęcia/kw2.png">KWERENDA 2</a>
        <a href="./zdjęcia/kw3.png">KWERENDA 3</a>
        <a href="./zdjęcia/kw4.png">KWERENDA 4</a>
    </nav>
    <main>
        <aside class="lewy">
            <img src="logo.png" alt="logo zdobywcy">
            <h3>razem z nami</h3>
            <ul>
                <li>wyjazd</li>
                <li>szkolenia</li>
                <li>rekreacja</li>
                <li>wypoczynek</li>
                <li>wyzwania</li>
            </ul>
        </aside>
        <aside class="prawy">
            <h2>Dołącz do naszego zespołu!</h2>
            <p>Wpisz swoje dane do formularza:</p>

            <form action="zdobywcy.php" method="post">
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" name="nazwisko" id="">
                <label for="imie">Imię:</label>
                <input type="text" name="imie" id="">
                <label for="funk">Funkcja</label>
                <select name="funk" id="">
                    <option value="uczestnik">uczestnik</option>
                    <option value="przewodnik">przewodnik</option>
                    <option value="zaopatrzeniowiec">zaopatrzeniowiec</option>
                    <option value="organizator">organizator</option>
                    <option value="ratownik">ratownik</option>
                </select>
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
                <input type="submit" value="Dodaj">
                <?php
                $con = mysqli_connect("localhost", "root", "", "zdobywcy");

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nazwisko']) && !empty($_POST['imie']) && !empty($_POST['funk']) && !empty($_POST['email'])) {
                    $nazwisko = $_POST['nazwisko'];
                    $imie = $_POST['imie'];
                    $funk = $_POST['funk'];
                    $email = $_POST['email'];
                    $zap1 = "INSERT INTO osoby( nazwisko, imie, funkcja, email) VALUES ('$nazwisko','$imie','$funk','$email');";
                    $result = mysqli_query($con, $zap1);
                }
                ?>
            </form>

            <table>
                <tr>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Funkcja</th>
                    <th>Email</th>
                </tr>
                <?php
                // $con = mysqli_connect("localhost", "root", "", "zdobywcy");
                $zap2 = "SELECT nazwisko, imie, funkcja, email FROM osoby;";
                $result = mysqli_query($con, $zap2);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['nazwisko']}</td>";
                    echo "<td>{$row['imie']}</td>";
                    echo "<td>{$row['funkcja']}</td>";
                    echo "<td>{$row['email']}</td> </tr>";
                };
                $discon = mysqli_close($con);
                ?>
            </table>
        </aside>
    </main>
    <footer>
        <p>Stronę wykonał: Filip K</p>
    </footer>
</body>

</html>