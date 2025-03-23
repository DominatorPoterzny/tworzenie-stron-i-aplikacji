<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $directory = 'file/' ?>
    <?php $plik = 'cos.txt' ?>
    </fieldset>
    <?php if (isset($_GET['plik'])) { ?>
        <fieldset>
            <div>Podgląd pliku</div>
            <div>
                <?php $plik = $_GET['plik'] ?>
                <?php $file = file_get_contents("file/$plik") ?>
                <?= $file ?>
            </div>
        </fieldset>
    <?php } ?>
</body>
</html>