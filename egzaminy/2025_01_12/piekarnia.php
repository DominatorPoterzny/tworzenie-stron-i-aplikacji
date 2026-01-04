<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA1</a><a href="kw2.png">KWERENDA2</a><a href="kw3.png">KWERENDA3</a><a href="kw4.png">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków</h4>
        <form action="piekarnia.php" method="post">
            <table>
                <select name="rodzaj">
                    <!-- skrypt1 -->
                    <?php $connect = mysqli_connect('localhost', 'root', '', 'piekarnia');
                    $result = mysqli_query($connect, "SELECT DISTINCT Rodzaj FROM wyroby ORDER by Rodzaj DESC;");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='$row[Rodzaj]'>$row[Rodzaj]</option>";
                    }
                    ?>
                </select>

                <button type="submit" name="wybierz">Wybierz</button>
                <!-- skrypt2 -->

                 <tr>
                    <th>Rodzaj</th>
                    <th>Nazwa</th>
                    <th>Gramatura</th>
                    <th>Cena</th>
                </tr>
                <?php
                    if(isset($_POST['wybierz'])){
                        $rodzaj = $_POST['rodzaj'];
                        $result2 = mysqli_query($connect,"SELECT Rodzaj,Nazwa,Gramatura,Cena FROM wyroby WHERE Rodzaj = '$rodzaj';");
                        while($row = mysqli_fetch_assoc($result2)){
                        echo"<tr>";
                        echo"<td>$row[Rodzaj]</td>";
                        echo"<td>$row[Nazwa]</td>";
                        echo"<td>$row[Gramatura]</td>";
                        echo"<td>$row[Cena]</td>";
                        echo"</tr>";
                        }
                    }
                ?>
                <?php  mysqli_close($connect)  ?>
               


            </table>

        </form>
    </main>
    <footer>
        <p>AUTOR Potężny Dominator</p>
        <p>Data: 04.01.2026</p>
    </footer>

</body>

</html>