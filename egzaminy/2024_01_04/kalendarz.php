<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <div class="kontener">
    <header class="pierwszy_baner"><img src="logo1.png" alt="lipiec"></header>
    <header class="drugi_baner">
        <h1>TERMINARZ</h1>
        <p>najbliższe zadania: 
        <!-- skrypt1 -->
        <?php  $connect = mysqli_connect('localhost','root','','terminarz');
            $result = mysqli_query($connect,"SELECT DISTINCT wpis FROM zadania WHERE (dataZadania BETWEEN '2020-07-01' AND '2020-07-07') AND wpis not LIKE '';");
            while($row = mysqli_fetch_assoc($result)){
                echo" $row[wpis];";
            }
        ?>
        </p>
    </header>
    </div>
    <main>
        <!-- skrypt 2 -->
        <?php  
            $result2 = mysqli_query($connect,"SELECT dataZadania,wpis FROM zadania WHERE miesiac = 'lipiec';");
            while($row = mysqli_fetch_assoc($result2)){
                echo"<section><h6>$row[dataZadania]</h6><p>$row[wpis]</p></section>";
            }
        ?>
        <?php  mysqli_close($connect)  ?>
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpien</a>
        <p>Stronę wykonał: Potężny Dominator</p>
    </footer>
</body>

</html>