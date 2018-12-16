<?php include 'signupcon.php';?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="images/logo.JPG" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
   <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />
<title>Registration Form</title>
</head>
<body>
<br>
<br>
<br>
<div id="navigation">
      <!-- Begin Shell -->
      <div class="shell">
        <ul>
          <ul>
          <li><a href="index.php" title="index.php">Home</a></li>
          <li>
            <div class="dd">
                 <li>
            <a href="hireemployee.php">Apply Job</a>
            <div class="dd">
            </div>
          </li>
            <li><a href="about.php">Reports</a></li>
             <li><a href="contact1.php">About Us</a></li>
             <li class="active"><a href="signup.php">Sign Up</a> </li>
            <li><a href="login.php">Login</a></li>
        </ul>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Shell -->
    </div>

    <br>
    <br>
    <br>
<div class="container">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:skyblue">
      <h1 class="panel-title" style="text-align:center">Create your new account</h1>
    </div>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="" method="POST" >
  <div class="form-group">
    <label class="col-sm-2 control-label">First name:</label>
    <div class="col-sm-8"> 
      <input class="form-control" style="color:black" name="fname" type="text" placeholder="Enter your first name" required="" autofocus>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Last name:</label>
    <div class="col-sm-8"> 
      <input class="form-control" style="color:black" name="lname" type="text" placeholder="Enter your last name" required="">
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
      <button type="submit" name="submit" class="btn btn-info" style="width:700px;margin-left:200"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
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
