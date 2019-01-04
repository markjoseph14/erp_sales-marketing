i<?php

session_start();
$date="";
	$lastname="";
	$sourceofinquiry="";
	$make="";
	$model="";
	$color="";
	$id="";
	$edit_state = false;
	$errors=array();

$db=mysqli_connect('localhost','root','','erp');


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM product_marketing where Product_ID=$Product_ID");
	echo "<script>alert('The order was deleted')</script>";
	header('location: index.php');
}

$results=mysqli_query($db,"SELECT * from product_marketing");
?> 