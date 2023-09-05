<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papar</title>
</head>
<body>
    <?php
    if (isset($_POST['pengalaman'])) {
        $pengalaman = $_POST['pengalaman'];

        $bilperkataan =str_word_count($pengalaman);
        echo "Ayat ini mengangungi $bilperkataan patah perkataan";
    ?>

    <br>

    <?php
        $bilhuruf = strlen($pengalaman);
        echo "Ayat ini mengandungi $bilhuruf huruf";
    ?>

    <br>

    <?php
        $perkataanrev = strrev($pengalaman);
        echo"Ayat terbalik: $perkataanrev";
    ?>
        
    <?php
    } else {
        echo "Tiada apa-apa";
    }
    ?>
</body>
</html>
