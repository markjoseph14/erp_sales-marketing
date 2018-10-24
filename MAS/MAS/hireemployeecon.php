<?php
	session_start();
	$id="";
	$name="";
	$gender="";
	$birthday="";
	$contact="";
	$email="";
	$age="";
	$address="";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','somstore');

if (isset($_POST['submit'])) {
	$id=trim($_POST['id']);
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$birthday=trim($_POST['birthday']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$age=trim($_POST['age']);
	$address=trim($_POST['address']);

$query=mysqli_query($db,"SELECT * FROM tb_employee where id='$id' or name='$name'");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Name or ID already exists')</script>";
}
else{
	$sql="INSERT INTO tb_employee (id,name,gender,birthday,contact,email,age,address) VALUES ('$id','$name','$gender','$birthday','$contact','$email','$age','$address')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: hireemployee.php');
} 
		}
}
if (isset($_POST['update'])) {
	$id=trim($_POST['id']);
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$birthday=trim($_POST['birthday']);
	$contact=trim($_POST['contact']);
	$email=trim($_POST['email']);
	$age=trim($_POST['age']);
	$address=trim($_POST['address']);

	mysqli_query($db,"UPDATE tb_employee SET id='$id',name='$name',gender='$gender',birthday='$birthday',contact='$contact',email='$email',age='$age',address='$address'");
	echo "<script>alert('The form is empty')</script>";
	header('location: hereport.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM tb_employee where id='$id'");
	echo "<script>alert('The form is empty')</script>";
	header('location: hereport.php');

}
$results=mysqli_query($db,"SELECT * from tb_employee");
?>