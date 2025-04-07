<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $con = mysqli_connect("localhost", "kolomanski", "12345678", "kolomanski") ?>
    <?php $querry = mysqli_query($con, 'SELECT upper(concat (Imie, " ", Nazwisko)) AS "Pracownicy" FROM pracownicy') ?>
    <ul>
        <hr>
        <?php if (mysqli_num_rows($querry) > 0) {
            while ($row = mysqli_fetch_assoc($querry)) { ?>
                
                <li> <?= $row['Pracownicy'] ?> </li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>

</html>