<?php include ('adminlogincon.php');?>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
   <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />
</head>
<body style="background-image:url">
<br>
<br>
<br>
<div id="navigation">
      <!-- Begin Shell -->
      <div class="shell">
        <ul>
          <li><a href="index.php" title="index.php">Home</a></li>
          <li>
            
             <li><a href="productreport.php"> Product Report</a></li>
                 <li>
            <a href="hereport.php"> Hiring Report</a>
            <div class="dd">
              <ul>
                
              </ul>
            </div>
          </li>
            <li><a href="#">About Us</a></li>
            <li><a href="fbreport.php">Feedback Report</a></li>
            <li><a href="regreport.php">Account Report</a> </li>
            <li class="active"><a href="adminlogin.php">Login</a> </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Shell -->
    </div>
    <br>
    <br>
    <br>
<div class="container" style="width: 600px">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:skyblue">
      <h1 class="panel-title" style="text-align:center">Login your account</h1>
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
  <input type="checkbox" style="margin-left:100px" name="remember me" value="Remember me"> Remember Me
  <a href="forgotpassword.php" style="color:blue;margin-left:100px">Forgot Password?</a>
        <br>
        <br>
    <div class="col-sm-8">
      <input class="form-control" name="login" type="submit" value="Login" style="margin-left:100px;background-color:skyblue;color:white;width:300px"><br>
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
<div id="footer">
      <div class="boxes">
        <!-- Begin Shell -->
        <div class="shell">
          <div class="box post-box">
            <h2>About Store</h2>
            <div class="box-entry">
              
              <p>You can be confident when you're shopping online with Store. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                             such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted. </p>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="box social-box">
            <h2>We are Social</h2>
            <ul>
              <li><a href="#" title="Facebook"><img src="images/social-icon1.png" alt="Facebook" /><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
              <li><a href="#" title="Twitter"><img src="images/social-icon2.png" alt="Twitter" /><span>Twitter</span><span class="cl">&nbsp;</span></a></li>              
              <li><a href="#" title="RSS"><img src="images/social-icon4.png" alt="RSS" /><span>RSS</span><span class="cl">&nbsp;</span></a></li>
              <li><a href="#" title="Blogger"><img src="images/social-icon7.png" alt="Blogger" /><span>Blogger</span><span class="cl">&nbsp;</span></a></li>
            </ul>
            <div class="cl">&nbsp;</div>
          </div>
          <div class="box">
            <h2>Information</h2>
            <ul>
              <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
              <li><a href="#" title="Contact Us">Contact Us</a></li>
              <li><a href="#" title="Log In">Log In</a></li>
              <li><a href="#" title="Account">Account</a></li>

            </ul>
          </div>
          <div class="cl">&nbsp;</div>
        </div>
        <!-- End Shell -->
      </div>
      <div class="copy">
        <!-- Begin Shell -->
        <div class="shell">
          <div class="carts">
          </div>  <p>&copy; Groups <a href="index.php"><i><font color="fefefe"> Welcome To Store Online Shopping Site </font></i></a></p>
          <div class="cl">&nbsp;</div>
          Copyright © 2018 Store.com All rights reserved. The information contained in Store.com may not be published, broadcast, rewritten, or redistributed without the prior written authority of Store.com
        </div>
        <!-- End Shell -->
      </div>
    </div>
</body>
</html>