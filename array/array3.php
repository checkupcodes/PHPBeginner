<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>foreach Php</h2>
    <h3>When PHP encounters a foreach statement, it assigns the first element of the array to the variable following the as keyword.</h3>
    <h4>----------------------------------------------------------</h4>
    <?php
    function print_array($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }

    $colors = ["red","yellow","green","white"];
    foreach ($colors as $color){
        print_array($color);
    }
    ?>
    <h4>----------------------------------------------------------</h4>
    <h3>Associative array how to use this : </h3>
    <?php

    $capitals = [
        'Japan' => 'Tokyo',
        'France' => 'Paris',
        'Germany' => 'Berlin',
        'United Kingdom' => 'London',
        'United States' => 'Washington D.C.'
    ];
    
    foreach ($capitals as $country => $capital) {
        print($country);
        echo " : ";
        print($capital);
        echo "<br>";
    }
    ?>
    <br>
    <a href="../index.php">Ana Sayfa</a>
</body>
</html>