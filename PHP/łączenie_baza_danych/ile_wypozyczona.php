<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
        padding: 5px;
    }
</style>
<body>
    <?php $con = mysqli_connect("localhost", "kolomanski", "12345678", "kolomanski") ?>
    <?php $querry = mysqli_query($con, 'SELECT Nr_transakcji, Data_wypozyczenia, Data_zwrotu, datediff(ifnull(Data_zwrotu,NOW()),Data_wypozyczenia) AS "Liczba_dni" FROM wypozyczenia ORDER BY `Liczba_dni` ASC') ?>
    <table>
        <tr>
            <th>Numer tranzakcji</th>
            <th>Data wypożyczenia</th>
            <th>Data zwrotu</th>
            <th>Liczba dni</th>
        </tr>
        <?php if (mysqli_num_rows($querry) > 0) {
            while ($row = mysqli_fetch_assoc($querry)) { ?>
                <tr>
                    <td><?= $row['Nr_transakcji'] ?></td>
                    <td><?= $row['Data_wypozyczenia'] ?></td>
                    <td><?= $row['Data_zwrotu'] ?></td>
                    <td><?= $row['Liczba_dni'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
    <?php mysqli_close($con) ?>
</body>

</html>