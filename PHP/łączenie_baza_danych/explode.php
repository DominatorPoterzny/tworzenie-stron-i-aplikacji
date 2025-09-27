<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td,
    th {
        border: black 1px solid;
    }
    table{
        border-collapse: collapse;
    }
    .cena{
        text-align: right;
    }
</style>

<body>
    <?php $con = mysqli_connect("localhost", "kolomanski", "12345678", "kolomanski") ?>
    <?php $querry = mysqli_query($con, 'SELECT Sygnatura, Tytul, Imie, Nazwisko, Wydawnictwo, Rok_wyd, Cena FROM ksiazki WHERE Rok_wyd BETWEEN "1990" and "2011" AND Wydawnictwo = "pwn" or Wydawnictwo = "helion" ORDER BY `ksiazki`.`Rok_wyd` ASC ') ?>
</body>
<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) {?>

            <tr>
                <td><?= $row['Sygnatura'] ?></td>
                <td><?= $row['Tytul'] ?></td>
                <td><?= $row['Imie'] ?> <?= $row['Nazwisko'] ?></td>
                <td><?= $row['Wydawnictwo'] ?></td>
                <td><?= $row['Rok_wyd'] ?></td>
                <td class="cena"><?= explode('.', $row['Cena'])[0] ?> zł <?= explode('.', $row['Cena'])[1] ?>gr</td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
<?php mysqli_close($con) ?>

</html>