<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo "hello world!"
        ?>
    </h1>

    <h2>
        <?=
        "hello world"
        ?>
    </h2>

    <?php if (true) { ?>
        <h1>hello this is true</h1>
    <?php } else { ?>
        <h1>hello this is false</h1>
    <?php } ?>
</body>

</html>