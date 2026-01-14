<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Konfigurator samochodów</title>
        <link href="styl.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1>Serwis konfiguracji samochodów</h1>
        </header>
        <nav>
            <h2>Samochody</h2>
            <h2>Konfigurator</h2>
            <h2>Kontakt</h2>
        </nav>
        <main>
            <section id="left">
                <table>
                    <?php
                    $link= mysqli_connect("localhost","root","","samochody");
                    $kw3="SELECT p.marka ,p.model ,p.cena ,k.nazwa ,k.doplata from pojazdy as p join kolory as k on p.kolor=k.id where p.model='alfa';";
                    $wynik1= mysqli_query($link, $kw3);
                    while ($row = mysqli_fetch_row($wynik1)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>".($row[2]+$row[4])."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </section>
            <section id="middle">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Konfiguracja</th>
                            <th>Cena</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3"><img src="a1.jpg" alt="Konfiguracja 1"/></td>
                        </tr>
                            <?php
                            $kw4="SELECT marka ,model ,cena from pojazdy order by rand() limit 2;";
                            $wynik2= mysqli_query($link, $kw4);
                            $row1 = mysqli_fetch_row($wynik2);
                            $row2 = mysqli_fetch_row($wynik2);
                                echo "<tr>";
                                echo "<td>Marka</td>";
                                echo "<td>$row1[0]</td>";
                                echo "<td rowspan='2'>$row1[2]</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>Model</td>";
                                echo "<td>$row1[1]</td>";
                                echo "</tr>";
                            ?>
                        <tr>
                            <td colspan="3"><img src="a2.jpg" alt="Konfiguracja 2"/></td>
                        </tr>
                            <?php
                                echo "<tr>";
                                echo "<td>Marka</td>";
                                echo "<td>$row2[0]</td>";
                                echo "<td rowspan='2'>$row2[2]</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>Model</td>";
                                echo "<td>$row2[1]</td>";
                                echo "</tr>";
                            mysqli_close($link);
                            ?>
                    </tbody>
                </table>
            </section>
            <section id="right">
                <h3>111 222 333</h3>
                <img src="a3.png" alt="Samochód"/>
            </section>
        </main>
        <footer>
            <p>Stronę wykonał: carpa</p>
        </footer>
    </body>
</html>
