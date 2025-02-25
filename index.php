<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
    $farby = array("red", "green", "blue");
    echo $farby[0];
    echo "<br>";

    foreach ($farby as $farba) {
        echo "farba: " . $farba . "<br>";
    }

    $data = array("Peter"=>25 , "Anna"=>30 , "Marek"=>20);

    foreach ($data as $name => $age) {
        echo "$name má $age rokov. <br>";
    }

    ?>

</body>
</html>
