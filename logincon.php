<?php
session_start();
$id="";
$username = "";
$password = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect("localhost","root","","db_project");

if (isset($_POST['login'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (count($errors) == 0) {
		$password = trim($_POST['password']);
		$sql = "SELECT * FROM tb_sign WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) == 1) {
			          echo "<script>alert('Welcome to our event planner system!')</script>";
			$_SESSION['username'] = $username;
			header('location: main.html');
		}else {
			echo "<script>alert('Invalid username or password')</script>";
		}
	}

}
?>