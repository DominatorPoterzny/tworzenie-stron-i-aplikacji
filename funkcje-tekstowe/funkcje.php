<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo strlen("kozak"); ?>
    /* strlen liczy litery w słowie, a wdł stony liczy ilość bajtów w wyrazie*/
    <hr>
    <?php $str = "Czesc, mam nadzieje z3 masz sie   dobrze!";?>
    <?php print_r (str_word_count($str, 0)); ?>
    /* formaty liczenia: 0-zwraca liczbe wyrazów 
    1- zwraca tablicę z wszystkimi wyrazami znalezionymi w string -u  */
    <hr>
    <?php echo strrev("Czesc kolego")?>
    /*wypisuje wyraz w spak */
    <hr>
    <?php echo strpos ("co ty gadasz php jest fajnie", "php") ?>
    /*wyszukuje pozycje 1 szukanego wyrazu; dokładniem, liczy ilość spacji do pierwszego spotkanego wyrazu */
    <hr>
    <?php echo str_replace("zdanie","php","glowne zdanie") ;?>
    /*zamienia w zdaniu "glowne zdanie" wyraz "zdanie" wyrazem "php" */
    <hr>
    <?php echo strtolower("SIEMA byCZq") ?>
    /* zamienia wszystkie znaki na małą litere */
    <hr>
    <?php echo strtoupper("SIEMA byCZq")?>
    /*zamienia wszystkie znaki na dużą litere */
    <hr>
    <?php echo ucwords("sIEMA byCZq") ?>
    /*zamienia na dużą litere każdy nowy wyraz */
    <hr>
    <?php echo trim("  costam beka z cb    ") ?>
    /*trim usuwa spacje/białe pola na początku i na końcu */
    <hr>
    <?= strstr("lubie nie byc w nie europie", "nie")  ?>
    /*szuka do pierwszego szukanego wyrazu i wyświetla dalej tekst */
    <hr>
    <?= substr("czesc Kolego", 2, 4)?> <br>
    <?= substr("czesc Kolego", 2)?>
    /*pierwsza liczba/wartość wybiera początek wyświetlania tekstu, a druga wartość to koniec wyświetlania tekstu */
    <hr>
    <?= str_pad("fajny tekst w PHP", 21, "-?", STR_PAD_BOTH ) ?> <br>
    <?= str_pad("fajny tekst w PHP", 21, "-?", STR_PAD_RIGHT ) ?>
    /* 21 to liczba miejsca do wykorzystania, "-?" to jest tekst który ma się wyświetlać po prawej lub po lewej stronie tekstu, jeśli daliśmy odpowiednią liczbe miejsca(jak dam liczbe 11 to nie wyświeli się żaden "-?") STR_PAD_BOTH to jest to że "-?" wyswieli się po obu stronach tekstu, a STR_PAD_RIGHT wyświetli się tylko po prawej stronie */

    <hr>
</body>?
</html>