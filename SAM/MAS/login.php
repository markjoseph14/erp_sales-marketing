<?php include ('logincon.php'); ?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="images/logo.jpg" />
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
<div class="clear"></div>
      </div>
      <!-- End Shell -->
    </div>
    <!-- End Header -->
    <!-- Begin Navigation -->
    <div id="navigation">
      <!-- Begin Shell -->
      <div class="shell">
        <ul>
          <li><a href="index.php" title="index.php">Home</a></li>
          <li>
            <div class="dd">
                 <li>
            <a href="hireemployee.php">Apply Job</a>
            <div class="dd">
            </div>
          </li>
            <li><a href="contact1.php">About Us</a></li>
            <li><a href="signup.php">Sign Up</a> </li>
            <li class="active"><a href="login.php">Login</a></li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Shell -->
    </div>
    <br>
    <br>
    <br>
    <div style="color: red; font-size: 15px;">
      <center>
      <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      </center>
    </div>  
    <br>
<div class="container" style="width: 600px">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:skyblue">
      <h1 class="panel-title" style="text-align:center">Login account</h1>
    </div>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="" method="POST" style="width: 500px">
  <div class="form-group has-feedback">
    <label class="col-sm-2 control-label">Username:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="username" type="text" placeholder="Enter your username" autofocus="" required="">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
  </div>
    <div class="form-group has-feedback">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black;height:35px" name="password" type="password" placeholder="Enter your password" required="">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
  </div>
    <div class="col-sm-8">
     <button type="submit" name="login" class="btn btn-info" style="margin-left:200px;"><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
    </div>
    <br>
    <br>
    <br>
    <a href="signup.php" style="color:blue;margin-left:180">No account? Sign up here</a>
      </form>
      <br>
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
              <img src="images/logo.JPG" alt="IShop Logo" width="160" height="80"/> 
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