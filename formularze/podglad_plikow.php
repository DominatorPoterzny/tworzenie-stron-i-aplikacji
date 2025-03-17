<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php ?>
    <fieldset>
        <div>Pliki w katalogu</div><?php $file = scandir("file") ?>
        <div>
            <?php foreach ($file as $key => $value) {
                if ('.' !== $value && '..' !== $value) {

                    echo $value . " " . filesize("file") . "<br>";
                }
            } ?></div>

        <!-- <?php print_r($file) ?> -->
    </fieldset>

</body>

</html>