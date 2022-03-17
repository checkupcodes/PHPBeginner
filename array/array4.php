<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>PHP Multidimensional Array </h2>
    <p>In PHP , an element in an array can be another array.</p>
    <h4>----------------------------------------------------------</h4>

    <?php
    function print_array($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $tasks = [
        ['Learn PHP programming', 2],
        ['Practice PHP', 2],
        ['Work', 8],
        ['Do exercise', 1],
    ];

    print_array($tasks);

    $tasks[4] = ['Build Something Better', 8]; #That was adding method.

    print_array($tasks);

    unset($tasks[0]); # That was removing method

    print_array($tasks);




    ?>
    <h4>----------------------------------------------------------</h4>
<?php 
foreach ($tasks as $task){
    foreach($task as $task_details){
        echo " : ";
        echo $task_details ;
    }
    echo  "<br>";
}
?>
    <br>
    <a href="../index.php">Ana Sayfa</a>
</body>

</html>