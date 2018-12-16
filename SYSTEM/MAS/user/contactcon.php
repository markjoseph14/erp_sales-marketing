<?php
	$name="";
	$email="";
	$contact="";
	$subject="";
	$edit_state = false;
	$errors=array();
	
$db=mysqli_connect('localhost','root','','somstore');

if (isset($_POST['submit'])) {
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$subject=trim($_POST['subject']);

$query=mysqli_query($db,"SELECT * FROM tb_contact where name=$name");


	$sql="INSERT INTO tb_contact (name,email,contact,subject) VALUES ('$name','$email','$contact','$subject')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: index.php');
 
}
}

if (isset($_POST['update'])) {
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$subject=trim($_POST['subject']);	

	mysqli_query($db,"UPDATE tb_contact SET name='$name',email='$email',contact='$contact',subject='$subject'");
	echo "<script>alert('Registration form updated')</script>";
	header('location: fbreport.php');
}

if (isset($_GET['del'])) {
	$name = $_GET['del'];
	mysqli_query($db,"DELETE FROM tb_contact where name='$name'");
	echo "<script>alert('Registration form deleted')</script>";
	header('location: fbreport.php');

}

$results=mysqli_query($db,"SELECT * from tb_contact");
?>