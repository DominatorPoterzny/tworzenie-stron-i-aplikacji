<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <img src="obraz1.png" alt="Mapa Polski">
    </header>
    <header>
        <h1>Rezki w województwie dolnośląskim</h1>
    </header>
    <nav>
        <form action="poziomRzek.php" method="post">

            <label for="stan" class="opis"><input type="radio" name="stan" value="wszystkie">Wszystkie</label>

            <label for="stan" class="opis"><input type="radio" name="stan" value="ostrzegawczy">Ponad stan ostrzegawczy</label>

            <label for="stan" class="opis"><input type="radio" name="stan" value="alarmowy">Ponad stan alarmowy</label>

            <input type="submit" value="Pokaż">
        </form>
    </nav>
    <section class="lewy">
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <tr>
                <th>Wodomierz</th>
                <th>Rzeka</th>
                <th>Ostrzegawczy</th>
                <th>Alarmowy</th>
                <th>Aktualny</th>
            </tr>
            <!-- skrypt1 -->
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'rzeki');
            if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['stan'] == 'wszystkie') {
                $result = mysqli_query($connect, "SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05';");
                while ($row = mysqli_fetch_assoc($result)) {
                echo"<tr>";
                echo"    <td>$row[nazwa]</td>";
                echo"    <td>$row[rzeka]</td>";
                echo"    <td>$row[stanOstrzegawczy]</td>";
                echo"    <td>$row[stanAlarmowy]</td>";
                echo"    <td>$row[stanWody]</td>";
                echo"</tr>";
                }
            }elseif($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['stan'] == 'ostrzegawczy'){
                $result2 = mysqli_query($connect, "SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy;");
                while ($row = mysqli_fetch_assoc($result2)) {
                echo"<tr>";
                echo"    <td>$row[nazwa]</td>";
                echo"    <td>$row[rzeka]</td>";
                echo"    <td>$row[stanOstrzegawczy]</td>";
                echo"    <td>$row[stanAlarmowy]</td>";
                echo"    <td>$row[stanWody]</td>";
                echo"</tr>";
                }
            }elseif($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['stan'] == 'alarmowy'){
                 $result3 = mysqli_query($connect, "SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05' AND stanWody > stanAlarmowy;");
                while ($row = mysqli_fetch_assoc($result3)) {
                echo"<tr>";
                echo"    <td>$row[nazwa]</td>";
                echo"    <td>$row[rzeka]</td>";
                echo"    <td>$row[stanOstrzegawczy]</td>";
                echo"    <td>$row[stanAlarmowy]</td>";
                echo"    <td>$row[stanWody]</td>";
                echo"</tr>";
                }
            }
            ?>
        </table>
    </section>
    <section class="prawy">
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wietr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <!-- skrypt2 -->
         <?php 
            $result4 = mysqli_query($connect,"SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru;");
            while($row = mysqli_fetch_array($result4)){
                echo"<p>$row[0]: $row[1]</p>";
            }
         ?>
         <?php mysqli_close($connect) ?>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
        <img src="obraz2.jpg" alt="rzeka">
    </section>
    <footer>
        <p>Stronę wykonał: Potężny Dominator</p>
    </footer>
</body>

</html>