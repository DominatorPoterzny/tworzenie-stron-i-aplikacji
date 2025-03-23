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
    <fieldset>
        <div>Pliki w katalogu</div> <?= $directory ?><?php $file = scandir("file") ?>
        <div>
            <ol>
                <?php foreach ($file as $key) {
                    if ('.' !== $key && '..' !== $key) { ?>

                        <!-- // echo $key . "<br>"; -->
                        <li> <a href="podglad_plikow_2.php"> <?= $key ?> </a> <?= filesize("$directory$key") ?> </li>  <br>
                     <?php } ?>
                 <?php } ?>
            </ol>
        </div>

        <!-- <?php print_r($file) ?> -->
    </fieldset>

</body>

</html>