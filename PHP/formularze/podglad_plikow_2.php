<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="podglad_plikow.php"></a>
    <?php print_r($_GET) ?>
    <?php $directory = 'file/' ?>
    <?php $plik = 'cos.txt' ?>
    </fieldset>
    <?php if (isset($_GET['name'])) { ?>
        <fieldset>
            <div>Podgląd pliku</div>
            <div>
                <textarea name="edit" id="edit" rows="30" cols="150">
                <?php $plik = $_GET['name'] ?>
                <?php $file = file_get_contents("file/$plik") ?>
                <?= $file ?>
                </textarea>
            </div>
        </fieldset>
    <?php } ?>
    <fieldset>

        <textarea name="text" id="text"><?php fopen("file/$plik", 'w') ?></textarea>

    </fieldset>
    <form action="" method="post">
        <input type="submit" value="Zapisz" name="save">
        <input type="reset" value="Anuluj" name="dis">
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        fwrite("file/$_GET[name]", 'text');
        fclose("file/$_GET[name]");
    } ?>

</body>

</html>