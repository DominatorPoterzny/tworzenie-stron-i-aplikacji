<h1>Tabela książki</h1>
<?php $result=$querry = mysqli_query($con, 'SELECT * FROM ksiazki')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytul</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Wydawnictwo</th>
        <th>Miejsce_wyd</th>
        <th>Rok_wyd</th>
        <th>Objetosc_ks</th>
        <th>Cena</th>
        <th>Id_dzial</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Sygnatura'] ?></td>
                <td><?= $row['Tytul'] ?></td>
                <td><?= $row['Nazwisko'] ?></td>
                <td><?= $row['Imie'] ?></td>
                <td><?= $row['Wydawnictwo'] ?></td>
                <td><?= $row['Miejsce_wyd'] ?></td>
                <td><?= $row['Rok_wyd'] ?></td>
                <td><?= $row['Objetosc_ks'] ?></td>
                <td><?= $row['Cena'] ?></td>
                <td><?= $row['Id_dzial'] ?></td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>