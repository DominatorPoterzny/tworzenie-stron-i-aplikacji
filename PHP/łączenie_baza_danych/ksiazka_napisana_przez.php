<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "kolomanski";
    $password = "12345678";
    $database = "kolomanski";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>

    <?php
    // $tytul = mysqli_query($con, "SELECT FROM ksiazki;");
    $autor = mysqli_query($con, "SELECT Tytul,imie,nazwisko FROM ksiazki;");
    ?>
    <?php
    if (mysqli_num_rows($autor) > 0) {
    while($row = mysqli_fetch_assoc($autor)) {
    echo "Książka " ."<i>". "<q>". $row["Tytul"]. "</q>"."</i>". " została napisana przez " . "<b>". $row["imie"]. " " . $row["nazwisko"]. "</b>". "<br>";
    }}
    else { 
    echo "0 results";
    }

    mysqli_close($con);
    ?>
</body>

</html>