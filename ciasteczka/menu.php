<div id="menu">
    <a href="/ciasteczka/strona_glowna.php" <?php if(basename($_SERVER["PHP_SELF"]) == "strona_glowna.php" ){
        $class = 'active'; 
    } ?> class="<?= $class ?>">Strona główna</a>
    <a href="/ciasteczka/strona_logowania.php" <?php if(basename($_SERVER["PHP_SELF"]) == "strona_logowania.php" ){
        $class = 'active'; 
    } ?> class="<?= $class ?>">Strona logowania</a>
    
    <a href="/ciasteczka/ustaw_ciastko.php" <?php if(basename($_SERVER["PHP_SELF"]) == "ustaw_ciastko.php" ){
        $class = 'active'; 
    } ?> class="<?= $class ?>">Ustaw ciastko</a>
</div>
<br>