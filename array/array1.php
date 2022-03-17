<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>List accressing, adding, changing, removing, getting, processor</h2>
    <h4>Use the <i>array()</i> or <i>[]</i> syntax to create a new array. </h4>
    <h4>For the indexed array, the firts index begin with ZERO.</h4>
    <h4>To accsess an array element, use an index in the square bracket.</h4>
    <h4>Use the <i>count()</i> function to get number of element in the array.</h4>

    <h3>---------------------------------------------------------</h3>
    
    <h3>My code</h3>

<?php
    function print_array($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    ?>
    <?php #Dizi çalışmaları
    $score = ["CEKAP", "A", 10, 3.21, "SELAM"]; #dizi oluşturma yöntemi (GENEL)
    $combo = array("selam", "millet", "ben", 5, 0, "cekap"); #dizi oluşturma yönetmi 2 (özel)
    print_array($score);
    print_array($combo);
    echo "$score[3]";
    echo "<br>";

    $score[3] = 6;
    print_array($score);
    $score[0] = 1;
    print_array($score);
    ?>
    <a href="../index.php">Ana Sayfa</a>

</body>

</html>