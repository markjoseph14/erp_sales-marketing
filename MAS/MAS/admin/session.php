<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../indexx.php');
    exit();
	}
	
	include('../conn.php');

	$sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];

	
}
?>
<?php
if(!isset($_SESSION['id'])){
	echo '<script type="text/javascript">window.location="indexx.php"; </script>';
?>	