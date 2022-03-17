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
    function print_array($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } ?>
    <h2>Associative Array in PHP</h2>
    <p>Associative array are arrays that allow you to keep tract of elements by names rather than by number.</p>

    <?php
    $html = array(); #1.tanımlama yöntemi
    $css = []; #2.tanımlama yöntemi

    $html['title'] = "Hyper Text Markup Langeuage";
    $html['description'] = "Basit Web desing with HTML CSS Javascript";

    print_array($html);
    echo "<br>";
    echo "key: html -  description : ";
    echo $html['title'];

    ?>
    <br>
    <a href="../index.php">Ana Sayfa</a>
</body>

</html>