<h1>Tabela stanowiska</h1>
<?php $result=$querry = mysqli_query($con, 'SELECT * FROM stanowiska')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Id_stanowisko</th>
        <th>Nazwa</th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_stanowisko'] ?></td>
                <td><?= $row['Nazwa'] ?></td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>