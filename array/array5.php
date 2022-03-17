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
    }

    $permissions = [
        'edit',
        'delete',
        'view'
    ];
    print_r($permissions);

    array_unshift($permissions, 'new');

    print_r($permissions); ?>
    <h4>----------------------------------------------------------</h4>
    <h3>array_unshift() : Prepend the element to do beginning of the array.</h3>
    <?php
    $cars = ["opel", "bmw", "mercedes", "volvo", "hundai"];
    print_r($cars);
    echo "<br>";
    array_unshift($cars, "toyota", "ford");
    print_r($cars);
    ?>
    <br>
    <h3>array_push() : Add the elements end of the array.</h3>
    <?php

    $numbers = [1, 2, 3];

    array_push($numbers, 4, 5);


    print_r($numbers);
    ?>
    <h3>array_pop() : Remove an element from the end of and array.</h3>
    <?php

    $numbers = [1, 2, 3];

    $last_number = array_pop($numbers);

    echo "$last_number   <br>"; // 3

    print_r($numbers);
    ?>
    <h3>array_shift() : Removes the first element from an array and return.</h3>
    <?php

    $numbers = [1, 2, 3];

    $first_number = array_shift($numbers);

    print_r($numbers);
    ?>
    <h3>array_keys() : Accepts an array and returns all the keys or a subset of the keys of the array.</h3>
    <?php

    $numbers11 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $keys = array_keys($numbers);

    print_array($numbers11);
    ?>
    <h3>array_keys_exists() : Check if a key exists in an array.</h3>
    <?php

    $roles = [
        'admin' => 1,
        'approver' => 2,
        'editor' => 3,
        'subscriber' => 4
    ];

    $result = array_key_exists('admin', $roles);

    var_dump($result); // bool(true)
    ?>
    <p><a href="../index.php">Ana Sayfa</a></p>
</body>

</html>