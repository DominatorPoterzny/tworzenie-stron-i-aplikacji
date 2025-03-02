<div id="menu">
    <a href="/ciasteczka/strona_glowna.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_glowna.php") ?  $active = ', active' : $active = ' ' ?> <?= $active ?>">Strona główna</a>
    <a href="/ciasteczka/strona_logowania.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "strona_logowania.php") ? $active = ', active' : $active = ' '  ?> <?= $active ?>">Strona logowania</a>

    <a href="/ciasteczka/ustaw_ciastko.php" class=" menu  <?php (basename($_SERVER["PHP_SELF"]) == "ustaw_ciastko.php") ? $active = ', active' : $active = ' '  ?> <?= $active ?>">Ustaw ciastko</a>
</div>
<br>