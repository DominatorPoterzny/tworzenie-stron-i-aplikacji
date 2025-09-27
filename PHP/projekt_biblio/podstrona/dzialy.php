<h1>Tabela działy</h1>
<?php $result = $querry = mysqli_query($con, 'SELECT * FROM dzialy')  ?>
<p>Zawiera <?= mysqli_num_rows($result) ?> wierszy</p>
<table>
    <tr>
        <th>Id_dzial</th>
        <th>Nazwa</th>
        <th><a href="?podstrona=dodawanie" class="edycja"><span>&#43;</span></a></th>
    </tr>
    <?php if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_dzial'] ?></td>
                <td><?= $row['Nazwa'] ?></td>
                <td><a href="?podstrona=edycja&Id_dzial=<?= $row['Id_dzial'] ?>&nazwa2=<?= $row['Nazwa'] ?>" class="edycja">edycja</a><a href="?podstrona=usuwanie&Id_dzial=<?= $row['Id_dzial'] ?>&nazwa2=<?= $row['Nazwa'] ?>"><span>&#9747;</span></a></td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>