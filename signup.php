<?php include 'signupcon.php';?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<title>Registration Form</title>
</head>
<body>
<br>
<br>
<div class="container">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:#b84e64">
      <h1 class="panel-title" style="text-align:center">REGISTRATION</h1>
    </div>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="" method="POST" >
   <div class="form-group">
    <label class="col-sm-2 control-label">Registration ID:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="id" type="integer" placeholder="Enter an ID" required="" maxlength="30">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Full Name:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="fullname" type="text" placeholder="Enter your fullname" required="" maxlength="30">
    </div>
  </div>
	<div class="form-group">	
    <label class="col-sm-2 control-label">Contact No:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black" name="contact" type="integer" placeholder="Enter your contact number" maxlength="11" required="">
    </div>
</div>
	<div class="form-group">	
    <label class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black" name="email" type="email" placeholder="Enter your email" required="" maxlength="30">
    </div>
</div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Address:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="address" type="text" placeholder="Enter your address" required="" maxlength="30">
    </div>
</div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Username:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="username" type="text" placeholder="Enter your username" required="" maxlength="30">
    </div>
</div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="password" type="password" placeholder="Enter your password" required="" maxlength="30">
    </div>
</div>
	     <div class="col-sm-8">
      <input class="form-control" name="submit" type="submit" style="background-color:blue;color:white;margin-left:300px;width:500px" value="Sign Up"><br>
       <br>
       </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
