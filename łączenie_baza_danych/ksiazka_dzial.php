<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    SELECT k.tytul, k.imie, k.nazwisko, k.cena, k.wydawnictwo, k.miejsce_wyd, k.rok_wyd, k.Objetosc_ks, k.Id_dzial, d.id_dzial, d.nazwa from ksiazki k INNER JOIN dzialy d ON k.Id_dzial = d.Id_dzial;
</body>

</html>