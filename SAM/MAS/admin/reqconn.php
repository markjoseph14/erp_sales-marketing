<?php
	$name="";
	$description="";
	$quantity="";
	$errors=array();
	
$db=mysqli_connect('localhost','root','','erp');

if (isset($_POST['submit'])) {
	$name=trim($_POST['name']);
	$department=trim($_POST['department']);
		$description=trim($_POST['description']);

	$quantity=trim($_POST['quantity']);

	$sql="INSERT INTO request (name,department,description,quantity) VALUES ('$name','$department','$description','$quantity')";	
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: req.php');
} 
		}
		
$results=mysqli_query($db,"SELECT * from request");
?>