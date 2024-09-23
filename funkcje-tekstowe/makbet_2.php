<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php $str = "Życie jest to opowieść idioty, pełna wrzasku i wściekłości, nic nie znacząca." ?>
   <p>Cytat:<q><?= $str?></q></p>
   <p>Liczba wyrazów: <?= str_word_count($str)?></p>
</body>
</html>