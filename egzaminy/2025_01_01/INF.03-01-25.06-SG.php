<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>
    <aside class="lewy">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul></ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>dupa</p>
    </aside>
    <main></main>
    <aside class="prawy">
        <h3>Dodaj nową grę</h3>
        <form action="./INF.03-01-25.06-SG.php" method="post">
            <label for="nazwa">nazwa</label>
            <input type="text" name="name" id="name"> <br>
            <label for="opis">Opis</label>
            <input type="text" name="opis" id="opis"> <br>
            <label for="">cena</label>
            <input type="text" name="cena" id="cena"> <br>
            <label for="">zdjęcie</label>
            <input type="text" name="zdjecie" id="zdjecie"> <br>
            <input type="submit" value="DODAJ">
        </form>
    </aside>
    <footer><form action="./INF.03-01-25.06-SG.php" method="post"></form></footer>
</body>

</html>