<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1>Introduction to PHP form processing</h1>
    <p>The <b>form</b> element has two important attributes:</p>
    <ul>
        <li>
            <u>action : </u> Specifies the URL that processes the form submission. In this example, the <b>form.php</b> will process the form.
            <br><br>
        </li>
        <li>
            <u>method : </u> Specifies the HTTP method for submitting the form. The most commonly used form methods are <b>POST</b> and <b>GET</b>. In this exapmle, the form method is <b>POST</b>
            <blockquote>If you don't specify the method attribute, the form element will use the <b>GET</b> method by default</blockquote>
        </li>

    </ul>
    <p>
        Typically, a form has one or more input elements including text, password, checkbox, radio button , select, file upload ... . The input elements are often called form fileds.
    </p>
    <p>
        An input element has the following important attributes <i>name</i>, <i>type</i> and <i>value</i>. The <i>name</i> attribute will be used for accessing the <i>value</i> in PHP.
    </p>
    <br><br><br>
    <h2>HTTP POST method</h2>
    <p>
        If a form uses the POST method, the web browser will include the from data in the HTTP request's body. After submitting form, you can access the form data via the associative array <b>$_POST</b> in PHP.
    </p>
    <p>
        For example, if a form has an input element with the name <b>email</b>, you can access the email value in PHP via the <b>$_POST["email"]</b>. If the form doesn't have an email input, the <b>$_POST</b> won't have any element with the key <b>"email".</b>
    </p>
    <br>
    <blockquote>
        <form action="form.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
            </div>
            <button type="submit">Submit</button>
        </form>
        <?php
        if (isset($_POST["email"])) {
            var_dump($_POST["email"]);
        }
        ?>
    </blockquote>
    <br><br><br>

    <h2>HTTP GET method</h2>
    <p>
        When you submit a form using the
    <p>GET</p> method, you can access the form data in PHP via the associative array <b>$_GET</b>
    </p>
    <p>
        Unlike the <b>POST</b> method, the <b>GET</b> method appends the form data in the URL processes the form.
    </p>
    <p>
        Suppose the URL that processes the form is <i>http://localhost/form.php</i>. When you enter the email and submit a form, you will see that the email value is appended to the URL like this.
    <blockquote>
        http://localhost/form.php?email=...+0gmail.com
    </blockquote>
    </p>
    <br>
    <p>The client-side validation’s purpose is to help legitimate users to enter data in the correct format. However, it doesn’t prevent malicious users from entering bad data that potentially harm the application. Therefore, it’s mandatory to implement server-side validation.</p>
    <br>
    <blockquote>
        <form action="subscribe.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>

            <button type="submit">Subscribe</button>
        </form>
        <?php
        if (isset($_POST["email"])) {
            var_dump($_POST["email"]);
        }
        ?><br><br>
        script>alert('Hello');/script>

    </blockquote>
        <br><br>
    <p>The subscribe.php page directly displays the form data. If malicious hackers intentionally enter bad data, the page won’t work properly.
        <p>Therefore, before displaying user input on a webpage, you should always escape the data. To do that, you use the htmlspecialchars() function:</p>
    </p>
</body>

</html>