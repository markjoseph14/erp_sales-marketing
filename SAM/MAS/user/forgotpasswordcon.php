<?php
$username = "";
$nusername = "";
$password = "";
$npassword = "";

$db = mysqli_connect("localhost","root","","somstore");

if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$nusername = trim($_POST['nusername']);
	$password = trim($_POST['password']);
	$npassword = trim($_POST['npassword']);

$query=mysqli_query($db,"SELECT * FROM tb_sign where username='$username'");
		
if (mysqli_num_rows($query) > 0) {
	echo "<script>alert('Username already exists')</script>";
}
else{
	$sql="INSERT INTO forgotpassword (recent username,new username,recent password,new password) VALUES ('$username','$nusername','$password','$npassword')";
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db,$query);
		header('Location: index.php');
		}

	}
}
$results=mysqli_query($db,"SELECT * from forgotpassword");
?>