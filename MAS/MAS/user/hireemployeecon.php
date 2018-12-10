<?php
	$name="";
	$gender="";
	$email="";
	$contact="";
	$work="";
	$skills="";
	$position="";
	$attainment="";
	$age="";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','somstore');

if (isset($_POST['submit'])) {
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$work=trim($_POST['work']);
	$skills=trim($_POST['skills']);
	$attainment=trim($_POST['attainment']);
	$position=trim($_POST['position']);
	$age=trim($_POST['age']);

$query=mysqli_query($db,"SELECT * FROM tb_employee where name='$name'");

if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Name already exists')</script>";
}
else{
	$sql="INSERT INTO tb_employee (name,gender,contact,email,work,skills,position,attainment,age) VALUES ('$name','$gender','$contact','$email','$work','$skills','$position','$attainment','$age')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: index.php');
} 
		}
}
if (isset($_POST['update'])) {
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$work=trim($_POST['work']);
	$skills=trim($_POST['skills']);
	$attainment=trim($_POST['attainment']);
	$position=trim($_POST['position']);
	$age=trim($_POST['age']);

	mysqli_query($db,"UPDATE tb_employee SET name='$name',gender='$gender',email='$email',contact='$contact',work='$work',skills='$skills',position='$position',attainment='$attainment',age='$age'");
	echo "<script>alert('The form is up to date')</script>";
	header('location: hereport.php');
}

if (isset($_GET['del'])) {
	$name = $_GET['del'];
	mysqli_query($db,"DELETE FROM tb_employee where name='$name'");
	echo "<script>alert('The form is up to date')</script>";
	header('location: hereport.php');

}
$results=mysqli_query($db,"SELECT * from tb_employee");
?>