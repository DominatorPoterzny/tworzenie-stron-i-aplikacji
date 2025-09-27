<h1>Edycja wiersza tabeli dzialy</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nazwa = htmlspecialchars(trim($_POST['nazwa']));
    $id = $_POST['id'];
    $queryy = "UPDATE dzialy SET Nazwa='$nazwa' WHERE Id_dzial='$id' ";
    print_r($queryy);
    mysqli_query($con, $queryy);
} else { ?>
    
    <form action="?podstrona=edycja" method="post">
        <table>
            <tr>
                <td>Id_dzialu</td>
                <td><input type="text" name="id" id="id" value="<?= $_GET['Id_dzial'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nazwa</td>
                <td><input type="text" name="nazwa" id="nazwa" value="<?= $_GET['nazwa2'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Zapisz"></td>
            </tr>


        </table>
    </form>
<?php } ?>
<p>Powrót do tabeli <a href="?podstrona=dzialy">dzialy</a></p>