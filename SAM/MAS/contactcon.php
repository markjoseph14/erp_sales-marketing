<?php
	
	
$db=mysqli_connect('localhost','root','','erp');

if (isset($_POST['submit'])) {
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$contact=trim($_POST['contact']);
	$subject=trim($_POST['subject']);

	$sql="INSERT INTO tb_contact (name,email,contact,subject) VALUES ('$name','$email','$contact','$subject')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: index.php');
 
}
}
?>