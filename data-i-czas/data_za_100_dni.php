<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="border-color: chocolate; color: chocolate;"><legend>teraźniejsza data</legend><?= date("d-m-y")?></fieldset>
    <fieldset style="border-color: darkgoldenrod; color: darkgoldenrod;"><legend>Data za 100 dni</legend><?= date("d-m-y", strtotime("+100 day"))?></fieldset>

</body>
</html>