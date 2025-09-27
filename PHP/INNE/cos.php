<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $con = mysqli_connect("localhost", "kolomanski", "12345678", "kolomanski") ?>
    <?php if (isset(['cos'])) {

        mysqli_query($con, 'UPDATE `piwo` SET piwo = piwo +1;');
    } ?>
    <?php print_r($_POST) ?>
</body>

</html>