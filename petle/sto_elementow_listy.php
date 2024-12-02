<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol style="list-style-type: upper-roman"><?php
        for ($i = 1; $i <= 100; $i++) { ?>
           <li style="margin-left: 40px;">To jest <?=$i ?> element listy</li> 
        <?php } ?> 
    </ol>
</body>

</html>