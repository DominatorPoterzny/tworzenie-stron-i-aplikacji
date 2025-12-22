<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="shortcut icon" href="./pliki3/obraz2.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <!-- skrypt 1 -->
         <?php  
            $connect = mysqli_connect('localhost','root','','medica');
            $result = mysqli_query($connect,"SELECT nazwa,cena,opis FROM abonamenty;");
            while($row = mysqli_fetch_assoc($result)){
                echo"<h3>Pakiet $row[nazwa] - cena $row[cena] zł</h3>";
                echo"<p>$row[opis]</p>";
            }
         ?>
         <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2>Standardowy</h2>
            <ul>
                <!-- skrypt2 -->
                 <?php  
                    $result2 = mysqli_query($connect,"SELECT nazwa,cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id = 1;");
                    while($row = mysqli_fetch_assoc($result2)){
                        echo"<li>$row[cecha]</li>";
                    }
                 ?>
            </ul>
        </section>
        <section>
            <h2>Premium</h2>
            <ul>
                 <?php  
                    $result3 = mysqli_query($connect,"SELECT nazwa,cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id = 2;");
                    while($row = mysqli_fetch_assoc($result3)){
                        echo"<li>$row[cecha]</li>";
                    }
                 ?>    
            </ul>
        </section>
        <section>
            <h2>Dziecko</h2>
            <ul>
                 <?php  
                    $result4 = mysqli_query($connect,"SELECT nazwa,cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id = 3;");
                    while($row = mysqli_fetch_assoc($result4)){
                        echo"<li>$row[cecha]</li>";
                    }
                 ?> 
                 <?php  mysqli_close($connect) ?>   
            </ul>
        </section>
    </main>
    <footer>
        <p><img src="./pliki3/obraz2.png" alt="przychodnia">Stronę przygotował: Potężny Dominator</p>
    </footer>

</body>
</html>