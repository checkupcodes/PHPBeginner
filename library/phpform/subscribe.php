<?php
/*if(isset($_POST["name"], $_POST["email"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "Thanks $name for your subscription. <br>";
    echo "Please confirm it in your invox of the email $email";
}else{
    echo "You need to provide your name and email address.";
}*/

if (isset($_POST['name'], $_POST['email'])) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name and email address.';
}

?>
