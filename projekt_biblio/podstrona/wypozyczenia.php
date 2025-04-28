<h1>Tabela wypożyczenia</h1>
<?php $result=$querry = mysqli_query($con, 'SELECT * FROM wypozyczenia')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Nr_transakcji</th>
        <th>Sygnatura</th>
        <th>Id_pracownika</th>
        <th>Nr_czytelnika</th>
        <th>Data_wypozyczenia</th>
        <th>Data_zwrotu</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Nr_transakcji'] ?></td>
                <td><?= $row['Sygnatura'] ?></td>
                <td><?= $row['Id_pracownika'] ?></td>
                <td><?= $row['Nr_czytelnika'] ?></td>
                <td><?= $row['Data_wypozyczenia'] ?></td>
                <td><?= $row['Data_zwrotu'] ?></td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>