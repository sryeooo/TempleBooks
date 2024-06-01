<?php
if (
	isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['password_confirmation']) && !empty($_POST['password_confirmation'])
) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
} else {
	echo ("error");
}
$Connection = mysqli_connect("localhost", "root", "", "shop_db");
$Query = "INSERT INTO users(name, email, password) VALUES ('$name','$email','$hashed_password')";
if (mysqli_query($Connection, $Query) === true) {
	$textTure = "ثبت نام شما با موفقیت انجام شد";
	echo ("$name.$textTure");

	$_SESSION["state_login"] = true;
	
} else {
	$textFalse = "ثبت نام شما انجام نشد";
	echo ("$name.$textFalse");
}

header("Location: index.php")

?>