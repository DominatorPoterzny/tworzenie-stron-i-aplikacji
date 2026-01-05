<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuwie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Obuwie męskie</h1>
    </header>
    <main>
        <form action="zamow.php" method="post">
            <label for="model">Model:</label>
            <select name="model" class="kontrolki">
                <!-- skrypt1 -->
                <?php  
                    $connect = mysqli_connect('localhost','root','','obuwie');
                    $result = mysqli_query($connect,"SELECT model FROM produkt;");
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<option value='$row[model]'>$row[model]</option>";
                    }                
                ?>
            </select>
            <label for="rozmiar">Rozmiar:</label>
            <select name="rozmiar" class="kontrolki">
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
            </select>
            <label for="liczba_par">Liczba par:</label>
            <input type="number" name="liczba_par" class="kontrolki">
            <input type="submit" value="Zamów" class="kontrolki">
            <!-- skrypt2 -->
            <?php 
                $result2 = mysqli_query($connect,"SELECT buty.model,nazwa,cena,nazwa_pliku FROM buty JOIN produkt ON buty.model=produkt.model;");
                while($row = mysqli_fetch_assoc($result2)){
                    echo"<div class='buty'>";
                    echo"<img src='$row[nazwa_pliku]' alt='but męski'>";
                    echo"<h2>$row[nazwa]</h2>";
                    echo"<h5>Model:$row[model]</h5>";
                    echo"<h4>Cena:$row[cena]</h4>";
                    echo"</div>";
                }
            ?>

        </form>
    </main>
    <footer>
        <p>Autor strony: Potężny Dominator</p>
    </footer>
</body>
</html>