<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset {
        border-color: black;
        border-width: 2px;
    }
    .red{
        font-style: italic;
        color: red;
    }
</style>

<body>
    <fieldset>
        <legend>lorem50</legend>
        <form action="" method="post">

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
                <p>Oto wpisany tekst:</p> <br>
                <p class="red"> <?php echo $_POST['text'] ?> </p>

            <?php } else { ?>
                <textarea name="text" id="text" rows="5" cols="50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia ipsam blanditiis consequatur ducimus quisquam corrupti nulla similique odit vitae accusantium libero aperiam, optio consectetur, tenetur repellat eius doloribus? Voluptatum nulla in reiciendis provident rerum reprehenderit excepturi neque quos. Unde velit ipsa numquam non distinctio possimus commodi officiis, repellat recusandae doloribus?</textarea><br>
                <input type="submit" value="Wyślij">
            <?php } ?>
        </form>
    </fieldset>
</body>

</html>