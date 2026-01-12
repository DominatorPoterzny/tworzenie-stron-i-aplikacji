<?php 
$connect = mysqli_connect('localhost','root','','wazenietirow');
header("refresh: 10;");?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header class="pierwszy">
        <h1>Ważenie pojazdów we Wrocławiu</h1>
    </header>
    <header class="drugi"><img src="obraz1.png" alt="waga"></header>
    <section class="lewy">
        <h2>Lokalizacje wag</h2>
        <ol>
            <!-- skrypt1 -->
             <?php
                
                $result = mysqli_query($connect,"SELECT ulica FROM lokalizacje;");
                while($row = mysqli_fetch_assoc($result)){
                    echo"<li>ulica $row[ulica]</li>";
                }
             ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="mailto:wazenie@wroclaw.pl">napisz</a>
    </section>
    <section class="srodek">
        <h2>Alerty</h2>
        <table>
            <tr>
                <th>rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzień</th>
                <th>czas</th>
            </tr>
            <!-- skrypt2 -->
             <?php 
             $result2 = mysqli_query($connect,"SELECT rejestracja,waga,dzien,czas,ulica FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id=lokalizacje.id WHERE waga > 5;");
             while($row = mysqli_fetch_assoc($result2)){
                
            echo"<tr>";
            echo"    <td>$row[rejestracja]</td>";
            echo"    <td>$row[ulica]</td>";
            echo"    <td>$row[waga]</td>";
            echo"    <td>$row[dzien]</td>";
            echo"    <td>$row[czas]</td>";
            echo"</tr>";

             }
             ?>

        </table>
        <!-- skrypt3 -->
         <?php
         $result3=mysqli_query($connect,"INSERT INTO wagi(lokalizacje_id, waga, rejestracja, dzien, czas) VALUES ('5',floor(1+rand()*(10-1+1)),'DW12345',CURRENT_DATE,CURRENT_TIME);");
        
         ?>
         <?php mysqli_close($connect) ?>
    </section>
    <section class="prawy"><img src="obraz2.jpg" alt="tir"></section>
    <footer>
        <p>Stronę wykonał: Potężny Dominator</p>
    </footer>
</body>
</html>