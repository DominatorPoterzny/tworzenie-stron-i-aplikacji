<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <!-- skrypt 1 -->
         <?php $connect = mysqli_connect('localhost','root','','biblioteka');
            for ($i=0; $i <=20 ; $i++) { 
                echo '<img src="./pliki4/obraz.png" alt="">';
            }
         ?>
    </header>
    <div class="kontener">
    <section class="pierwszy">
        <h2>Liryka</h2>
        <form action="biblioteka.php" method="post">
            <select name="liryka" id="liryka">
                <!-- skrypt 2 -->
                 <?php 
                    $result = mysqli_query($connect, "SELECT id,tytul FROM ksiazka WHERE gatunek = 'liryka';");
                    while($row = mysqli_fetch_assoc($result)){ ?>

                            <option value="<?= $row['id'] ?>" name="ID_"><?= $row['tytul'] ?></option>
              <?php      }
                 ?>
                 
            </select>
            <input type="submit" value="Rezerwuj" name="liryka_btn">
            <?php
                    if (isset($_POST['liryka_btn'])) {
                        $id =$_POST['liryka'];
                        
                        
                        $result2 = mysqli_query($connect, "SELECT tytul FROM ksiazka WHERE id = $id;");
                        while($row = mysqli_fetch_assoc($result2)){
                            echo "<p>Ksiązka <?= $row[tytul] ?> została zarezerwowana</p>";
                            $result3 = mysqli_query($connect,"UPDATE ksiazka set rezerwacja = 1 WHERE id = $id;");
                        }
                    }                 
                 ?>

        </form>
    </section>
    <section class="drugi">
        <h2>Epika</h2>
        <form action="biblioteka.php" method="post">
            <select name="epika" id="epika">
                <!-- skrypt 2 -->
                 <?php 
                    $result = mysqli_query($connect, "SELECT id,tytul FROM ksiazka WHERE gatunek = 'epika';");
                    while($row = mysqli_fetch_assoc($result)){ ?>

                            <option value="<?= $row['id'] ?>"  name="ID_"><?= $row['tytul'] ?></option>
              <?php      }
                 ?>
            </select>
            <input type="submit" value="Rezerwuj" name="epika_btn">
            <?php
                    if (isset($_POST['epika_btn'])) {
                        $id =$_POST['epika'];
                        
                        
                        $result2 = mysqli_query($connect, "SELECT tytul FROM ksiazka WHERE id = $id;");
                        while($row = mysqli_fetch_assoc($result2)){
                            echo "<p>Ksiązka <?= $row[tytul] ?> została zarezerwowana</p>";
                            $result4 = mysqli_query($connect,"UPDATE ksiazka set rezerwacja = 1 WHERE id = $id;");
                        }
                    }                 
                 ?>
        </form>
    </section>
    <section class="trzeci">
        <h2>Dramat</h2>
        <form action="biblioteka.php" method="post">
            <select name="dramat" id="dramat">
                        <?php 
                    $result = mysqli_query($connect, "SELECT id,tytul FROM ksiazka WHERE gatunek = 'dramat';");
                    while($row = mysqli_fetch_assoc($result)){ ?>

                            <option value="<?= $row['id'] ?>"  name="ID_"><?= $row['tytul'] ?></option>
              <?php      }
                 ?>
            </select>
            <input type="submit" value="Rezerwuj" name="dramat_btn">
            <?php
                    if (isset($_POST['dramat_btn'])) {
                        $id =$_POST['dramat'];
                        
                        
                        $result2 = mysqli_query($connect, "SELECT tytul FROM ksiazka WHERE id = $id;");
                        while($row = mysqli_fetch_assoc($result2)){
                            echo "<p>Ksiązka <?= $row[tytul] ?> została zarezerwowana</p>";
                            $result5 = mysqli_query($connect,"UPDATE ksiazka set rezerwacja = 1 WHERE id = $id;");
                        }
                    }                 
                 ?>
        </form>
    </section>
    <section class="czwarty">
        <h2>Zaległe książki</h2>
        <ul>
            <!-- skrypt 4 -->
             <?php 
                $result6 = mysqli_query($connect, "SELECT tytul, id_cz,data_odd FROM ksiazka JOIN wypozyczenia on ksiazka.id=wypozyczenia.id_ks ORDER BY `wypozyczenia`.`data_odd` ASC LIMIT 15");
                while($row = mysqli_fetch_assoc($result6)){ ?>
                    <li><?= $row['tytul'] ?> <?= $row['id_cz'] ?> <?= $row['data_odd'] ?></li>
            <?php    }
             ?>
             <?php mysqli_close($connect) ?>
        </ul>
    </section> 
    </div>
    <footer>
        <p>Autor:<strong>Poteżny Dominator</strong></p>
    </footer>
</body>
</html>