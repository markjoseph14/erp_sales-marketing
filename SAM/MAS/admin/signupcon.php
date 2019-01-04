<?php
	
$db=mysqli_connect('localhost','root','','erp');

if (isset($_POST['submit'])) {
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$username=trim($_POST['username']);
	$password = trim($_POST['password']);

	$sql="INSERT INTO tb_sign (fname,lname,contact,email,username,password) VALUES ('$fname','$lname','$contact','$email','$username','$password')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: login.php');
} 
		}
$results=mysqli_query($db,"SELECT * from tb_sign");
?>