<h1>Tabela pracownicy</h1>
<?php $result=$querry = mysqli_query($con, 'SELECT pracownicy.`Id_pracownika`,pracownicy.`Nazwisko`,pracownicy.`Imie`,stanowiska.Nazwa,pracownicy.`Miasto`,pracownicy.`Data_zatrudnienia`,pracownicy.`Wynagrodzenie` FROM `pracownicy` JOIN stanowiska on pracownicy.Id_stanowisko= stanowiska.Id_stanowisko')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Id_pracownika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Id_stanowisko</th>
        <th>Miasto</th>
        <th>Data_zatrudnienia</th>
        <th>Wynagrodzenie</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_pracownika'] ?></td>
                <td><?= $row['Nazwisko'] ?></td>
                <td><?= $row['Imie'] ?></td>
                <td><?= $row['Nazwa'] ?></td>
                <td><?= $row['Miasto'] ?></td>
                <td><?= $row['Data_zatrudnienia'] ?></td>
                <td><?= $row['Wynagrodzenie'] ?></td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>