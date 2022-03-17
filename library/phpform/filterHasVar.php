<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Form</title>
</head>

<body>
    <h1>Introduction filter_has_var() function</h1>
    <p>The function checks if a variable of a specified type exists. Here's the syntax of the function :
    <blockquote>
        filter_has_var(int $input_type , string $var_name) : bool

    </blockquote>
    </p>
    <p>
        filter_has_var function has the following parameter.
    </p>
    <ul>
        <li>
            <b>$input_type</b> is the type of input that you want to search for a variable. The valid input types are <b>INPUT_GET , INPUT_POST , INPUT_COOKIE , INPUT_SERVER , INPUT_ENV</b>.
            <br><br>
        </li>
        <li>
            <b>$var_name is the name of the variable to check.</b>
        </li>
    </ul>
</body>

</html>