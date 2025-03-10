<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    sup {
        color: red;
    }

    form {
        background-color: lightblue;

    }
</style>

<body> <?php
        $error = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['name'])) {
                if (str_word_count(trim($_POST['name'])) == 2) {
                    $error['dupa'] = '';
                    echo "cos";
                } else {
                    $error['dupa'] = "Imię i nazwisko musi składać się z dwóch wyrazów";
                }
            }
            if(!empty($_POST['email'])){
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $error['cos'] = '';
                }else{
                    $error['cos'] = "Niepoprawny adres email";
                }
            }
        } ?>
    <form action="" method="post">
        <label for="name">Imię i Nazwisko<sup>*</sup></label><br>
        <input type="text" name="name" id="name">
        <?= $error['dupa'] ?>
        <br>
        <label for="email">Adres Email<sup>*</sup></label><br>
        <input type="email" name="email" id="email">
        <br>
        <label for="old">Przedział wiekowy<sup>*</sup></label><br>
        <select name="old" id="old">
            <option value=""></option>
            <option value="25">do 25</option>
            <option value="25-50">25-50</option>
            <option value="50-75">50-75</option>
            <option value="75">powyżej 75</option>
        </select>
        <br>
        <label for="text">Wiadomość<sup>*</sup></label><br>
        <textarea name="text" id="text"></textarea>
        <br>
        <input type="checkbox" name="zgoda" id="zgoda">
        <label for="zgoda">Zgoda na przetwarzanie danych<sup>*</sup></label>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
</body>

</html>