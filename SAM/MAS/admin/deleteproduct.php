<?php
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from product where productid='$pid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($conn,"delete from product_marketing where Product_ID='$Product_ID'");
	
	header('location:index.php');

?>