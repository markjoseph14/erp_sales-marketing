<?php
session_start();
$id="";
$username = "";
$password = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect("localhost","root","","somstore");

if (isset($_POST['login'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (count($errors) == 0) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$sql = "SELECT * FROM tb_sign WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) == 1) {
			          echo "<script>alert('Welcome to Marketing and Sales-Point of Sale!')</script>";
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('location: index.php');
		}else {
			echo "<script>alert('Invalid username or password')</script>";
		}
	}
}
?>