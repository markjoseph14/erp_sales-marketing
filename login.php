<?php include ('logincon.php');?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image:url">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="width: 600px">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:#b84e64">
      <h1 class="panel-title" style="text-align:center">USER LOGIN</h1>
    </div>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="" method="POST" style="width: 500px">
  <div class="form-group">
    <label class="col-sm-2 control-label">Username:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="username" type="text" placeholder="Enter your username" autofocus="" required="">
    </div>
  </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="password" type="password" placeholder="Enter your password" required="">
    </div>
  </div>
        <br>
    <div class="col-sm-8">
      <input class="form-control" name="login" type="submit" value="Login" style="background-color:blue;color:white;width:500px"><br>
      <br>
    </div>
      </form>
      </div>
    </div>
  </div>
</div>

                            
       
                                          
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>