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
    span {
        color: red;
        font-size: 14px;
    }
</style>

<body> <?php
        
        $error = [
            'name' => '',
            'email' => '',
            'old' => '',
            'text' => '',
            'zgoda' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['name'])) {
                if (str_word_count(trim($_POST['name'])) === 2) {
                    $error['name'] = '';
                } else {
                    $error['name'] = "Imię i nazwisko musi składać się z dwóch wyrazów";
                }
            }
            if (!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $error['email'] = '';
                } else {
                    $error['email'] = "Niepoprawny adres email";
                }
            }
            if (empty($_POST['old'])) {
                $error['old'] = "Wybierz przedział wiekowy";
            } else {
                $error['old'] = '';
            }
            if (strlen($_POST['text']) < 10) {
                $error['text'] = "Wiadomość musi zawierać conajmniej 10 znaków";
            } else {
                $error['text'] = '';
            }
            if (empty($_POST['zgoda'])) {
                $error['zgoda'] = "Potwierdź swoją zgodę";
            } else {
                $error['zgoda'] = '';
            }
        } ?>
    <form action="" method="post">
        <label for="name">Imię i Nazwisko<sup>*</sup></label><br>
        <input type="text" name="name" id="name">
        <br>
        <span><?= $error['name'] ?></span>
        <br>
        <label for="email">Adres Email<sup>*</sup></label><br>
        <input type="text" name="email" id="email">
        <br>
        <span><?= $error['email'] ?></span>
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
        <span><?= $error['old'] ?></span>
        <br>
        <label for="text">Wiadomość<sup>*</sup></label><br>
        <textarea name="text" id="text"></textarea>
        <br>
        <span><?= $error['text'] ?></span>
        <br>
        <input type="checkbox" name="zgoda" id="zgoda">
        <label for="zgoda">Zgoda na przetwarzanie danych<sup>*</sup></label>
        <br>
        <span><?= $error['zgoda'] ?></span>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
    <pre><?php echo (date("Y-m-d G:i:s")); echo "\n"; print_r($_POST) ?>
    </pre>

    <?php 
    if(empty($error['name']) && empty($error['email']) && empty($error['old']) && empty($error['text']) && empty($error['zgoda'])){
        $file = fopen('formularz_kontaktowy.txt', 'a');
        // $file = $tab . "\n";
        // $tab = date("Y-m-d G:i:s") ."\n" . $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['old'] . "\n" . $_POST['text'] . "\n" . $_POST['zgoda'] . "\n";
        $tab = date("Y-m-d G:i:s") . "\n" . print_r($_POST, true);
        fwrite($file,$tab);
        fclose($file);
    }
    ?>
</body>
</html>