<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Dni, miesiące, lata...</h1>
    </header>

    <section>
        <p>
            <?php
            $today = date('m-d');
            $weekday = date('N');
            // if (date('N') == 1) {
            //     $weekday = "Poniedziałek";
            // }
            // if (date('N') == 2) {
            //     $weekday = "Wtorek";
            // }
            // if (date('N') == 3) {
            //     $weekday = "Środa";
            // }
            // if (date('N') == 4) {
            //     $weekday = "Czwartek";
            // }
            // if (date('N') == 5) {
            //     $weekday = "Piątek";
            // }
            // if (date('N') == 6) {
            //     $weekday = "Sobota";
            // }
            // if (date('N') == 7) {
            //     $weekday = "Niedziela";
            // }
            $weekday_pl = array("1" => "Poniedziałek", "2" => "Wtorek", "3" => "Środa", "5" => "Czwartek", "6" => "Piątek", "7" => "Niedziela");
            $today_2 = date("d-m-Y");
            $con = mysqli_connect("localhost", "root", "", "kalendarz");
            $result = mysqli_query($con, "SELECT imiona FROM imieniny WHERE data = '$today';");
            while ($row = mysqli_fetch_assoc($result)) {;
                echo "Dzisiaj jest $weekday_pl[$weekday], $today_2, imieniny: $row[imiona] ";
                // echo "Dzisiaj jest $weekday, $today_2, imieniny: $row[imiona] ";
            }
            ?></p>
    </section>
    <div class="kontener">
        <aside class="left">
            <table>
                <tr>
                    <th>liczba dni</th>
                    <th>miesiąc</th>
                </tr>
                <tr>
                    <td rowspan="7">31</td>
                    <td>styczeń</td>
                </tr>
                <tr>
                    <td>marzec</td>
                </tr>
                <tr>
                    <td>maj</td>
                </tr>
                <tr>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>sierpień</td>
                </tr>
                <tr>
                    <td>październik</td>
                </tr>
                <tr>
                    <td>grudzień</td>
                </tr>
                <tr>
                    <td rowspan="4">30</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>czerwiec</td>
                </tr>
                <tr>
                    <td>wrzesień</td>
                </tr>
                <tr>
                    <td>listopad</td>
                </tr>
                <tr>
                    <td>28 lub 29</td>
                    <td>luty</td>
                </tr>

            </table>
        </aside>
        <main>
            <h2>Sprawdź kto ma urodziny</h2>
            <form action="kalendarz.php" method="post">
                <input type="date" name="data" id="data" value="2024-01-01" min="2024-01-01" max="2024-12-31">
                <input type="submit" value="wyślij">
            </form>
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $format = date("m-d", strtotime($_POST['data']));
                $formatdata = $_POST['data'];
                $result2 = mysqli_query($con, "SELECT imiona FROM imieniny WHERE data = '$format';");
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "<p>Dnia $formatdata są imieniny: $row[imiona]</p>";
                };
            };
            mysqli_close($con);
            ?>
        </main>
        <aside class="right"><a href="https://pl.wikipedia.org/wiki/Kalendarz_Majów" target="_blank"><img src="kalendarz.gif" alt=""></a>
            <h2>Rodzaje kalendarzy</h2>
            <ol>
                <li>słoneczny
                    <ul>
                        <li>kalendarz Majów</li>
                        <li>juliański</li>
                        <li>gregoriański</li>
                    </ul>
                </li>
                <li>księżycowy
                    <ul>
                        <li>starogrecki</li>
                        <li>babiloński</li>
                    </ul>
                </li>
            </ol>
        </aside>
    </div>
    <footer>Stronę opracował(a): Potężny Dominator</footer>
</body>

</html>