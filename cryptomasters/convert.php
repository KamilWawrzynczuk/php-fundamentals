<?php
    // include_once "classes/converter.php";
    require_once "includes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>convertion results</h1>

    <?php

    // var_dump($_SERVER);

    if (isset($_POST['amount']) && isset($_POST['crypto'])) {
        // superglobal variables
        $amount = $_POST['amount'];
        $crypto = $_POST['crypto'];

        $converter = new CryptoConverter($crypto);

        $result = $converter->convert($amount);

        echo "<p>You want to convert $amount from $crypto</p>";
        echo "<h2>You have USD $result</h2>";

    } else { ?>
        <h2>Ops! It did't work</h2>
    <?php } ?>

</body>
</html>
