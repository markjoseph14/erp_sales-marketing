<?php

$conn = mysqli_connect("localhost","root","","somstore");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>