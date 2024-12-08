<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p {
        color: yellowgreen;
        border-top: double 10px greenyellow;
        border-bottom: double 10px greenyellow;
        font-size: 24px;
        padding: 10px 0px 10px 0px;
        text-shadow: 1px 1px 5px forestgreen;

    }
</style>


<body>
    <p><?php for ($i = -10; $i <= 10; $i++) {
            if ($i >= 10) {
                echo "$i.";
            } else {
                echo "$i, ";
            }
        } ?></p>
</body>

</html>