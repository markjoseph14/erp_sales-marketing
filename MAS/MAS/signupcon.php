<?php
	session_start();
	$fullname="";
	$contact="";
	$address="";
	$username="";
	$email="";
	$password = "";
	$edit_state = false;
	$errors=array();
	
	
$db=mysqli_connect('localhost','root','','somstore');

if (isset($_POST['submit'])) {
	$fullname=trim($_POST['fullname']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$address=trim($_POST['address']);
	$username=trim($_POST['username']);
	$password = trim($_POST['password']);

$query=mysqli_query($db,"SELECT * FROM tb_sign where name='$name'");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Registration ID already exists')</script>";
}
else{
	$sql="INSERT INTO tb_sign (fullname,contact,email,address,username,password) VALUES ('$fullname','$contact','$email','$address','$username','$password')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: login.php');
} 
		}
}

if (isset($_POST['update'])) {
	$fullname=trim($_POST['fullname']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$address=trim($_POST['address']);
	$username=trim($_POST['username']);
	$password = trim($_POST['password']);
	

	mysqli_query($db,"UPDATE tb_sign SET fullname='$fullname',contact='$contact',email='$email',address='$address',username='$username',password='$password'");
	echo "<script>alert('Registration form updated')</script>";
	header('location: regreport.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM tb_sign where name='$name'");
	echo "<script>alert('Registration form deleted')</script>";
	header('location: regreport.php');

}

$results=mysqli_query($db,"SELECT * FROM tb_sign");
?>