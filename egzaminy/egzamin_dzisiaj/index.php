<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php 
        $connect = mysqli_connect('localhost','root','','samochody');
        $result = mysqli_query($connect,"SELECT p.marka ,p.model ,p.cena ,k.nazwa ,k.doplata from pojazdy as p join kolory as k on p.kolor=k.id where p.model='alfa';");
        while($row = mysqli_fetch_assoc($result)){
            $suma = $row['cena'] + $row['doplata']
            ?>
            
            <tr>
                <td><?= $row['marka'] ?></td>
                <td><?= $row['model'] ?></td>
                <td><?= $row['kolor'] ?></td>
                <td><?= $suma ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>