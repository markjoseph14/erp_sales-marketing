<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['msg'] = "Username should not contain space and special characters!"; 
			header('location: indexx.php');
		}
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		
		$query=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
	}
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
			header('location: indexx.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['access']==1){
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='admin/';
				</script>
				<?php
			}
			elseif ($row['access']==2){
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Success, Welcome User!');
					window.location.href='user/';
				</script>
			<?php
			}
		}
		}

		$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['username']=$res['username'];
$_SESSION['userid']=$res['id'];
$_SESSION['password']=$res['password'];
echo '<script type="text/javascript">window.location="index.php"; </script>';

}
?>