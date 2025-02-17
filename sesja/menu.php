<div id="menu">
    <a href="/sesja/strona_glowna.php" <?php if(basename($_SERVER["PHP_SELF"]) == "strona_glowna.php" ){
        $class = active 
    } ?> >Strona główna</a>
    <a href="/sesja/strona_logowania.php">Strona logowania</a>
    <a href="/sesja/strona_tylko_dla_zalogowanych.php">Strona tylko dla zalogowanych</a>
    <a href="/sesja/strona_wylogowania.php">Strona wylogowania</a>
</div>
<br>