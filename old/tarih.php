<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Today is " . date("d/m/Y") . "<br>";

    date_default_timezone_set("Turkey");
    echo "The time is " . date("h:i:sa") . "<br>";

    echo "Tarih ayarlandı : ";
    $tarih = mktime(12, 00, 00, 8, 21, 2020);
    echo "Planlı : " . date("Y-m-d h:i:sa", $tarih);
    echo "<br><br>";
    echo "Şu tarihten bugüne geçen süre : ";
    $gecen = strtotime("10:30am September 20 2021");
    echo "Gecen : " . date("d-m-Y h:i:sa", $gecen);
    echo "<br> <br>";


    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";


    ?>

    <h3>Sonraki 6 cumartesi gününün tarihini veren php kodları:</h3>
    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    } ?>

    <h2>4 Temmuza kalan süre sayısı : </h2>
    <?php
    $day1 = strtotime("July 04 2022");
    $day2 = ceil(($day1 - time())/ 60 / 60 / 24);
    echo "Onumuzdeki " . $day2 . " gün sonra 4 Temmuz olacak";

    ?>

    © 2010-<?php echo date("Y"); ?>
</body>

</html>