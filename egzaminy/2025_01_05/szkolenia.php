<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma szkoleniowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="baner.jpg" alt="Szkolenia">
    </header>
    <div class="kontener">
    <nav>
        <ul>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="szkolenia.php">Szkolenia</a></li>
        </ul>
    </nav>
    <main>
        <?php  $connect = mysqli_connect('localhost','root','','firma');
            $result = mysqli_query($connect,"SELECT Data,Temat FROM szkolenia ORDER BY Data ASC;");
            $fp = fopen('harmonogram.txt','w');
            while($row = mysqli_fetch_assoc($result)){
                echo"<p>$row[Data] $row[Temat]</p>";
                // $do_zapisania = "$row[Data] $row[Temat]";
                fwrite($fp,"$row[Data] $row[Temat]\n");
            };
            
                
                
                fclose($fp);
        ?>
        <?php  mysqli_close($connect)  ?>
    </main>
    </div>
    <footer>
        <h2>Firma szkoleniowa, ul. Główna 1, 23-456 Warszawa</h2>
        <p>Autor: Potężny Dominator</p>
    </footer>
</body>
</html>