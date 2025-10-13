<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOŁO SZACHOWE</title>
    <link rel="stylesheet" href="inf_03_2025_01_10_SG.css">
</head>

<body>
    <header>
        <h2>Koło szchowe <i>gambit piona</i></h2>
    </header>
    <div>
        <aside class="left">
            <h4>Polecane linki</h4>
            <ul>
                <li><a href="">kwerenda1</a></li>
                <li><a href="">kwerenda2</a></li>
                <li><a href="">kwerenda3</a></li>
                <li><a href="">kwerenda4</a></li>
            </ul>
            <img src="./zdj/logo.png" alt="Logo koła">
        </aside>
        <aside class="right">
            <h3>Najlepsi gracze naszego koła</h3>
            <table>
                <tr>
                    <th>Pozycja</th>
                    <th>Pseudonim</th>
                    <th>Tytuł</th>
                    <th>Ranking</th>
                    <th>Klasa</th>
                </tr>
                
                <?php 
                $con = mysqli_connect('localhost', 'root', '', 'szachy');
                $querry = "SELECT pseudonim,tytul,ranking,klasa FROM zawodnicy WHERE ranking > 2787 ORDER BY ranking DESC;";
                $result = mysqli_query($con, $querry);
                $i=1;
                

                while($row = mysqli_fetch_assoc($result)){
                echo"<tr>"; 
                echo"<td>$i</td>"; 
                echo"<td>$row[pseudonim]</td>";
                echo"<td>$row[tytul]</td>";
                echo"<td>$row[ranking]</td>";
                echo"<td>$row[klasa]</td>";
                echo"</tr>";
                $i++;
                }
            
                ?>
            </table>
            

            <form action="" method="post">
                <input type="submit" value="Losuj nową parę graczy" name="button">
                <?php 
                    if (isset($_POST['button'])) {
                        $querry2 = "SELECT pseudonim, klasa FROM zawodnicy ORDER BY rand() LIMIT 2;";
                       $result = mysqli_query($con, $querry2);
                       $player1 = mysqli_fetch_assoc($result);
                       $player2 = mysqli_fetch_assoc($result);
                       echo"<h4>$player1[pseudonim] $player1[klasa] $player2[pseudonim] $player2[klasa]</h4>";
                    }                
                ?>
            </form>
            
            <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
        </aside>
    </div>
    <footer>
        <p>Stronę wykonał: Twoja mama</p>
    </footer>
</body>

</html>