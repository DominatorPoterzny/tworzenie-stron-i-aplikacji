<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>KONKURS-WOLONTARIAT SZKOLNY</h1>
    </header>
    <div class="kontener">
        <aside class="left">
            <h3>Kokursowe nagrody</h3>
            <form action="">
                <input type="submit" value="Losuj nowe nagrody">
            </form>
            <table>
                <tr>
                    <th>Nr</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Wartość</th>
                </tr>

                <?php
                $connect = mysqli_connect("localhost", "root", "", "konkurs");
                $zapytanie = "SELECT nazwa,opis,cena FROM nagrody order by rand() LIMIT 5;";
                $liczba = 1;
                $result = mysqli_query($connect, $zapytanie);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $liczba++ ?></td>
                        <td><?=   $row['nazwa'] ?></td>
                        <td><?=   $row['opis'] ?></td>
                        <td><?=   $row['cena'] ?></td>
                    </tr>
                <?php  }
                ?>
            </table>
        </aside>
        <aside class="right">
            <img src="puchar.png" alt="Puchar dla wolontariusza">
            <h4>Polecane linki</h4>
            <ul>
                <li><a href="kw1.png">Kwerenda1</a></li>
                <li><a href="kw2.png">Kwerenda2</a></li>
                <li><a href="kw3.png">Kwerenda3</a></li>
                <li><a href="kw4.png">Kwerenda4</a></li>
            </ul>
        </aside>
    </div>
    <footer>Numer zdającego: Potężny Dominator</footer>
</body>

</html>