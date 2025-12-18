<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remonty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header><h1>Malowanie i gipsowanie</h1></header>
    <main>
    <nav>
        <a href="kontakt.html">Kontakt</a>
        <a href="http://remonty.pl" target="_blank">Partnerzy</a>
    </nav>
    
    <div class="kontener">
        <section class="lewa">
            <h2>Dla klientów</h2>
            <form action="zlecenia.php" method="post">
                <label for="pracownicy">Ilu co najmniej pracowników potrzebujesz?</label><br>
                <input type="number" name="pracownicy" id="pracownicy" step="1">
                <button type="submit" name="szukaj">Szukaj firm</button>
                <!-- skrypt 1 -->
                 <?php 
                    $connect = mysqli_connect('localhost','root','','remonty');
                    if(isset($_POST['szukaj'])){
                        $liczba_pracowników = $_POST['pracownicy'];
                        $result = mysqli_query($connect, "SELECT nazwa_firmy, liczba_pracownikow FROM wykonawcy WHERE liczba_pracownikow >=$liczba_pracowników;");
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<p>$row[nazwa_firmy], $row[liczba_pracownikow] pracowników</p>";
                        }

                    }
                 ?>
            </form>
        </section>
        <section class="srodek">
            <h2>Dla wykonawców</h2>
            <form action="zlecenia.php" method="post">
                <select name="miasto" id="miasto">
                    <!-- skrypt 2 -->
                     <?php 
                        $result2 = mysqli_query($connect, "SELECT DISTINCT miasto FROM klienci ORDER BY miasto asc;");
                        while($row = mysqli_fetch_assoc($result2)){
                            echo "<option value='$row[miasto]'>$row[miasto]</option>";
                        }
                     ?>
                </select><br> 
                <input type="radio" name="malowanie" value="malowanie"><label for="">malowanie</label><br>
                <input type="radio" name="malowanie" value="gipsowanie"><label for="">gipsowanie</label><br>
                <button type="submit" name="szukaj_klienta">Szukaj klienta</button>
                
                <ul>
                    <!-- skrypt 3 -->
                     <?php 
                     if(isset($_POST['miasto']) &&isset($_POST['szukaj_klienta'])){
                        $nazwa_miasta = $_POST['miasto'];
                        $remont = $_POST['malowanie'];
                        $result3 = mysqli_query($connect,"SELECT imie, cena FROM klienci JOIN zlecenia ON klienci.id_klienta=zlecenia.id_klienta WHERE miasto = '$nazwa_miasta' AND zlecenia.rodzaj = '$remont';");
                        while($row = mysqli_fetch_assoc($result3)){
                            echo"<li>$row[imie] - $row[cena]</li>";
                        }
                     }
                     ?>
                </ul>
            </form>
        </section>
        </div>
        <aside>
            <img src="./pliki5/tapeta_lewa.png" alt="usługi">
            <img src="./tapeta_prawa.png" alt="usługi">
            <img src="./pliki5/tapeta_lewa.png" alt="usługi">
        </aside>
        
        
    </main>
    <footer>
        <p><strong>Stronę wykonał: Potężny Dominator</strong></p>
    </footer>
    
</body>
</html>
<?php mysqli_close($connect) ?>