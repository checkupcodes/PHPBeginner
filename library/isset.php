<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>

<body>
    <h1>What is the isset()</h1>
    <p>isset - return treu if a variable is set and not null.</p>
    <p>PHP - <b>isset()</b> returns <b>true</b> if a variable is set and not noll</p>
    <p><b>isset()</b> is alanguage construct, not a function. Therefore, you cannot assign it to a variable, return it from a function or call it dynamically via a variable function.</p>
    <ol>
        <li>You can create a function what uses the <b>isset()</b> construct and call that function using the variable function. For example :
            <blockquote>
                <!--Aşağıdaki örnekte name değişkenin içerisinde değer olduğu için true değeri dönderecek.-->
                <?php
                function isset_fun($data): bool
                {
                    return isset($data);
                }
                $name = "Cekap";
                var_dump(isset_fun($name));
                ?>
            </blockquote>
        </li>
        <li>
            Or it's shortered if you use the arrow function syntax.
            <blockquote>
                <?php
                #$count = 0;
                var_dump(isset($count));
                ?>
                Bu işlemi daha sonra bakılacak şuan hata veriyor.
            </blockquote>
        </li>
        <li>
            If you assign <b>null</b> to a variable and pass it to the <b>isset()</b>, isset() will return <b><i>false</i></b>
            <blockquote>
                <?php
                $count = null;
                var_dump(isset($count));
                ?>
            </blockquote>
        </li>
        <li>If you unset a variablei the variable become unset. Therefore, the <b><i>inset()</i></b> will return <b><i>false</i></b>
            <blockquote>
                <?php
                $deneme = 0;
                echo "$deneme <br>";
                unset($deneme);
                echo $deneme;
                var_dump(isset($deneme));
                ?>
            </blockquote>
        </li>
    </ol>
    <br><br><br>
    <h3>Using PHP isset with array</h3>
    <ol>
        <li>
            If you pass an array element to <b>isset()</b>, it will return <b><i>true</i></b>
            <blockquote>
                <?php
                $colors = ["first" => "blue"];
                var_dump(isset($colors["first"]))
                ?>
            </blockquote>
        </li>
        <li>
            However, if you pass a non-existing element to <b>isset()</b>, it will return false. <blockquote>
                <?php
                $colors = ["first" => "blue"];
                var_dump(isset($colors["second"]))
                ?>
            </blockquote>
        </li>
        <li>
            If you pass an array element with value null to <b>isset()</b>, The <b><i>isset()</i></b> will return <b><i>false</i></b>;
            <blockquote>
                <?php
                $colors = ["third" => null];
                var_dump(isset($colors["third"]))
                ?>
            </blockquote>
        </li>
    </ol>
    <br><br><br>

    <h3>PHP isset() with string offsets</h3>
    <ol>
        <li>
            The <b>isset()</b> works with string offsets
            <blockquote>
                <?php
                $message = "Hello";
                var_dump(isset($message[0]));

                ?>
            </blockquote>
        </li>
    </ol>
    <h1>EKSİK KALDI DEVAM ETTİR</h1>
</body>

</html>