<?php

	session_start();
	$fullname="";
	$contact="";
	$email="";
	$address="";
	$username="";
	$password = "";
	$id="";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','erp');

if (isset($_POST['submit'])) {
	$id=trim($_POST['id']);
	$fullname=trim($_POST['fullname']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$address=trim($_POST['address']);
	$username=trim($_POST['username']);
	$password = trim($_POST['password']);

$query=mysqli_query($db,"SELECT * FROM tbl_sign where id='$id' or username='$username'");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Registration ID or Username already exists')</script>";
}
else{
	$sql="INSERT INTO signup (id,fullname,contact,email,address,username,password) VALUES ('$id','$fullname','$contact','$email','$address','$username','$password')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: login.php');
} 
		}
}
$result=mysqli_query($db,"SELECT * FROM tbl_sign");

?>

