<div id="menu">
    <a href="/sesja/strona_glowna.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_glowna.php") ?  $active = ', active' : $active = ' ' ?> <?= $active ?>">Strona główna</a>
    <a href="/sesja/strona_logowania.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_logowania.php") ?  $active = ', active' : $active = ' ' ?> <?= $active ?>">Strona logowania</a>
    <a href="/sesja/strona_tylko_dla_zalogowanych.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_tylko_dla_zalogowanych.php") ?  $active = ', active' : $active = ' ' ?> <?= $active ?>">Strona tylko dla zalogowanych</a>
    <a href="/sesja/strona_wylogowania.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_wylogowania.php") ?  $active = ', active' : $active = ' ' ?> <?= $active ?>">Strona wylogowania</a>
</div>
<br>