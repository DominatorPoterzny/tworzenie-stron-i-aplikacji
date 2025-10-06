<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>

<!-- <style>
    * {
        font-family: Verdana;
    }

    body {
        background: linear-gradient(Teal, Aliceblue);
        color: white;
        text-align: center;
        margin: 0px 20px 0px 20px;
    }
</style> -->

<body>
    <img src="./wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="./kw1.png">KWERENDA1</a>
        <a href="">KWERENDA2</a>
        <a href="">KWERENDA3</a>
        <a href="">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <?php
        // $con = mysqli_connect('localhost', 'filipk', ' piekarnia');
        $connect = mysqli_connect('localhost', 'root', '', 'piekarnia');
        ?>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form action="piekarnia.php" method="POST">
            <select name="Rodzaj" id="Rodzaj">
                <?php
                $querry = mysqli_query($connect, 'SELECT DISTINCT Rodzaj FROM wyroby ORDER BY wyroby.Rodzaj DESC');
                while ($row = mysqli_fetch_assoc($querry)) { ?>
                    <option value="<?= $row['Rodzaj'] ?>"><?= $row['Rodzaj'] ?></option>
                <?php  } ?>
            </select>
            <input type="submit" value="Wybierz" name="submit">
        </form>
        <table>
            <!-- SELECT `Rodzaj`,`Nazwa`,`Gramatura`,`Cena` FROM `wyroby` WHERE Rodzaj = "Inne" -->
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            $rodzaj = $_POST['Rodzaj'];
            if (isset($_POST['submit'])) {
                $querry2 = mysqli_query($connect, "SELECT `Rodzaj`,`Nazwa`,`Gramatura`,`Cena` FROM `wyroby` WHERE Rodzaj = '$rodzaj'");
                while ($row = mysqli_fetch_assoc($querry2)) { ?>
                    <tr>
                        <td><?= $row['Rodzaj'] ?></td>
                        <td><?= $row['Nazwa'] ?></td>
                        <td><?= $row['Gramatura'] ?></td>
                        <td><?= $row['Cena'] ?></td>
                    </tr>
                <?php } ?>
        </table>

    <?php }
            mysqli_close($connect);?>


    </main>
    <footer>Autor: ja kurwa DATA: 18.07.2025</footer>
</body>

</html>