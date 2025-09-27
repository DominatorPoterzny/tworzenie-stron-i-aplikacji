<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th,
    td {
        border: 1px black dotted;
        padding: 3px;
    }
    table{
        border-collapse: collapse;
    }
</style>

<body>
    <?php $movies = array(
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => "fantasy",
        "Pulp Fiction" => "gangsterski",
        "Siedem" => "kryminał",
        "Podziemny krąg" => "thriller",
        "Django" => "western",
        "Król Lew" => "animacja",
        "Avengers: Wojna bez granic" => "akcja",
        "Dobry, zły i brzydki" => "western"
    ); ?>
    <table>
        <caption>sortowanie rosnąco według warotości asort</caption>
        <th>klucz</th>
        <th>wartosc</th>
        <?php asort($movies);
        foreach ($movies as $x => $y) { ?>
            <tr>
                <td> <?= $x ?> </td>
                <td> <?= $y ?> </td>
            </tr>

        <?php } ?>
    </table>

    <table>
        <caption>sortowanie malejąco według warotości arsort</caption>
        <th>klucz</th>
        <th>wartosc</th>
        <?php arsort($movies);
        foreach ($movies as $x => $y) { ?>
            <tr>
                <td> <?= $x ?> </td>
                <td> <?= $y ?> </td>
            </tr>

        <?php } ?>
    </table>

    <table>
        <caption>sortowanie rosnąco według kluczy ksort</caption>
        <th>klucz</th>
        <th>wartosc</th>
        <?php ksort($movies);
        foreach ($movies as $x => $y) { ?>
            <tr>
                <td> <?= $x ?> </td>
                <td> <?= $y ?> </td>
            </tr>

        <?php } ?>
    </table>

    <table>
        <caption>sortowanie rosnąco według kluczy krsort</caption>
        <th>klucz</th>
        <th>wartosc</th>
        <?php krsort($movies);
        foreach ($movies as $x => $y) { ?>
            <tr>
                <td> <?= $x ?> </td>
                <td> <?= $y ?> </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>