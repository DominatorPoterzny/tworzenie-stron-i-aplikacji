<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #szkolny{
            background-color: lightsteelblue;
            border: 2px dotted blueviolet;
            border-radius: 5px;
            padding: 15px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <p>Najbliższy <strong>Sylwester</strong> odbędzie się w <strong><?=date('N', strtotime('2024-12-31')) ?></strong> dniu tygodnia.</p>
    <br>
    <h3>Aktualna godzina</h3><br>
    <p><?= date('G:i:s') ?></p>
    <h3>Osiem godzin później</h3><br>
    <p><?= date('G:i:s', time() + 60*60*8) ?></p>
    <br>
    <hr>
    <p id="szkolny">Rozpoczęcie tego roku szkolnego odbyło się w <?=date('l', mktime(0, 0, 0, 9, 2, 2024)); ?> i był to <?=date("z", mktime(0, 0, 0, 9, 2, 2024)) ?> dzień roku.</p>
    <?php echo "29 września 2027 to ". date("l",mktime(0,0,0,9,29,2027)) #to "l" z połączeniem pokazuje dzień tygodnia, a wsm to sama l to pokazuje  ?>
    <?=date("m-d-y") <br> /* miesiąc-dzień-rok*/
    date()?> 
</body>
</html>