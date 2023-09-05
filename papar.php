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
        echo "Ayat ini mengangungi $bilperkataan patah perkataan <br>";

        $bilhuruf = strlen($pengalaman);
        echo "Ayat ini mengandungi $bilhuruf huruf <br>";

        $perkataanrev = strrev($pengalaman);
        echo"Ayat terbalik: $perkataanrev";

    } else {
        echo "<p>Tiada apa-apa</p>";
    }
    ?>
</body>
</html>
