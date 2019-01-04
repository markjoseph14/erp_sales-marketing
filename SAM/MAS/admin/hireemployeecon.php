<?php
	
$db=mysqli_connect('localhost','root','','erp');

if (isset($_POST['submit'])) {
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$birthday=trim($_POST['birthday']);
	$gender=trim($_POST['gender']);
	$email=trim($_POST['email']);
	$address=trim($_POST['address']);
	$contact=trim($_POST['contact']);
	$skills=trim($_POST['skills']);
	$attainment=trim($_POST['attainment']);
	$department=trim($_POST['department']);
	$pos_id=trim($_POST['position']);
	$age=trim($_POST['age']);

	$pos = mysqli_query($db,"SELECT * from position where description = '$position' ");
	$row_pos = mysqli_fetch_array($pos);
	$pos_id = $row_pos['id'];


	$sql="INSERT INTO employee (firstname,lastname,skills,edu_attain,address,email,age,birthday,contact_info,gender,department,position_id) VALUES 
	('$fname','$lname','$skills','$attainment','$address','$email','$age','$birthday','$contact','$gender','$department','$pos_id')";
		if ($db->multi_query($sql)=== TRUE) {
		mysqli_query($db, $query);
		    header('Location: index.php');
}
}

$results=mysqli_query($db,"SELECT * from employee");
?>