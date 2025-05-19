<h1>Tabela działy</h1>
<?php $result = $querry = mysqli_query($con, 'SELECT * FROM dzialy')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Id_dzial</th>
        <th>Nazwa</th>
        <th><a href="?podstrona=dodawanie" style="">X</a></th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_dzial'] ?></td>
                <td><?= $row['Nazwa'] ?></td>
                <td></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>