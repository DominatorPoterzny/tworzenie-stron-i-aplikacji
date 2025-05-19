<h1>Tabela czytelnicy</h1>
<?php $result = $querry = mysqli_query($con, 'SELECT * FROM czytelnicy')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Nr_czytelnika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreslenia</th>
        <th>Nr_legitymacji</th>
        <th>Funkcja</th>
        <th>Plec</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) {; ?>
            <tr>
                <td><?= $row['Nr_czytelnika'] ?></td>
                <td><?= $row['Nazwisko'] ?></td>
                <td><?= $row['Imie'] ?></td>
                <td><?= $row['Data_ur'] ?></td>
                <td><?= $row['Ulica'] ?></td>
                <td><?= $row['Kod'] ?></td>
                <td><?= $row['Miasto'] ?></td>
                <td><?= $row['Data_zapisania'] ?></td>
                <td><?= $row['Data_skreslenia'] ?></td>
                <td><?= $row['Nr_legitymacji'] ?></td>
                <td><?= $row['Funkcja'] ?></td>
                <td> <?php if ($row['Plec'] == 'K') {echo "Kobieta";} else {echo "Mężczyzna";}  ?></td>

            </tr>
        <?php } ?>
    <?php } ?>

</table>