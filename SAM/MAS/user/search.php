<?php
	include('dbcon.php');
	
	$rcode=$_POST['rcode'];

	$query=mysqli_query($con,"select userid from customer WHERE userid = '$rcode'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query);

		if ($count>0)
		{
			echo "<script>document.location='deliver_status.php?rcode=$rcode'</script>";  
		}
		else
		{
			echo "<script type='text/javascript'>alert('Successful!');</script>";
			echo "<script>document.location='deliver_status.php'</script>";  
		}	
?>   