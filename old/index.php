<!DOCTYPE HTML>
<html>

<body>

    <!--<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p style="padding: 50px;">
            Name : <input type="text" name="name"><br>
            E-mail : <input type="text" name="email"><br>
            Web Site : <input type="text" name="web"><br>
            Comment : <textarea name="comment" rows="8" cols="50"></textarea>
        </p>
        <p>
            Gender :
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
        </p>
    </form>

</body>

</html>