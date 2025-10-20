<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
    <link rel="stylesheet" href="./style/style2.css">
</head>

<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>
    <nav>
        <a href="./zdjęcia/kw1.png"></a>
        <a href="./zdjęcia/kw2.png"></a>
        <a href="./zdjęcia/kw3.png"></a>
        <a href="./zdjęcia/kw4.png"></a>
    </nav>
    <aside class="lewy">
        <img src="./zdjęcia/logo.png" alt="logo zdobywcy">
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
        <form action="./zdobywcy.php" post>
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
        </form>
        <table>
            <tr>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Funkcja</th>
                <th>Email</th>
            </tr>
            <?php
            $con = mysqli_connect("zdobywcy", "root", "", )
            ?>
        </table>
    </aside>
    <footer>
        <p>Stronę wykonał: Filip K</p>
    </footer>
</body>

</html>