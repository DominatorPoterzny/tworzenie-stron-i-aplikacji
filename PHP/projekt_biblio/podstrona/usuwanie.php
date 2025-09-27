<h1>Usuwanie wiersza tabeli dzialy</h1>
<p style="color: red;">Czy na pewno chcesz usunąć te dane?</p>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nazwa = htmlspecialchars(trim($_POST['nazwa']));
    $id = $_POST['id'];
    $query3 = "DELETE FROM dzialy WHERE `dzialy`.`Id_dzial` = '$id' ";
    print_r($query3);
    mysqli_query($con, $query3);
} else { ?>


    <form action="?podstrona=usuwanie" method="post">
        <table>
            <tr>
                <td>Id_dzialu</td>
                <td><input type="text" name="id" id="id" value="<?= $_GET['Id_dzial'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nazwa</td>
                <td><input type="text" name="nazwa" id="nazwa" value="<?= $_GET['nazwa2'] ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="usuń"></td>
            </tr>


        </table>
    </form>
<?php } ?>
<p>Powrót do tabeli <a href="?podstrona=dzialy">dzialy</a></p>