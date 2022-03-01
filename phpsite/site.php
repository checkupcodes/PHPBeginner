<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h2>Merhaba benim siteme Hoşgeldiniz - Check-up Codes</h2>
    <p>Cekap tarafından tasarlanmıştır</p>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <h3>Benim arabalamı bilmek mi istiyorsun ?</h3>
    <?php include "vars.php";
    echo "Benim arabam $color renkte ve markası $car";
    #Yukardaki örnekte include yerine require kullansaydık malesef alttaki değişkenlere ulaşamayınca o satırı hiç okumayacaktı.
    ?>
    

    <?php include 'footer.php'; ?>
</body>

</html>