<?php

	session_start();
	$id="";
	$name="";
	$email="";
	$contact="";
	$subject="";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','somstore');

if (isset($_POST['submit'])) {
	$id=trim($_POST['id']);
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$subject=trim($_POST['subject']);

$query=mysqli_query($db,"SELECT * FROM tb_contact where id=$id");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('ID already exists')</script>";
}
else{
	$sql="INSERT INTO tb_contact (id,name,email,contact,subject) VALUES ('$id','$name','$email','$contact','$subject')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: contact1.php');
} 
        }
}

if (isset($_POST['update'])) {
	$id=trim($_POST['id']);
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$subject=trim($_POST['subject']);

	mysqli_query($db,"UPDATE tb_contact SET id='$id',name='$name',email='$email',contact='$contact',subject='$subject'");
	echo "<script>alert('Registration form updated')</script>";
	header('location: fbreport.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM tb_contact where id='$id'");
	echo "<script>alert('Registration form deleted')</script>";
	header('location: fbreport.php');

}

$results=mysqli_query($db,"SELECT * from tb_contact");
?>