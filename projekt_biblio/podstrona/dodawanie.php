<h1>Nowe dane w tabeli dzialy</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = $_POST['nazwa'];
    $query = 'INSERT INTO `dzialy`(`Nazwa`) VALUES ("[$nazwa]")';
    mysqli_query($con, $query);
} else { ?>
<form action="dodawanie.php" method="post">
    <table>
        <tr>
            <td>Id_dzialu</td>
            <td><input type="text" name="id" id="" disabled></td>
        </tr>
        <tr>
            <td>Nazwa</td>
            <td><input type="text" name="nazwa" id="nazwa"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Zapisz"></td>
        </tr>


    </table>
</form>
<?php } ?>
<p>Powrót do tabeli <a href="?podstrona=dzialy">dzialy</a></p>
