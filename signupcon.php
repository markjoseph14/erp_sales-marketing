<?php

	session_start();
	$fullname="";
	$contact="";
	$address="";
	$username="";
	$password = "";
	$id = "";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','db_project');

if (isset($_POST['submit'])) {
	$id=trim($_POST['id']);
	$fullname=trim($_POST['fullname']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$address=trim($_POST['address']);
	$username=trim($_POST['username']);
	$password = trim($_POST['password']);

$query=mysqli_query($db,"SELECT * FROM tb_sign where username='$username'");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Registration ID or Username already exists')</script>";
}
else{
	$sql="INSERT INTO tb_sign (id,fullname,contact,email,address,username,password) VALUES ('$id','$fullname','$contact','$email','$address','$username','$password')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: login.php');
} 
		}
}
?>