<?php include 'reqconn.php';?>
<?php
session_start();
include("config.php");?>
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
<title>Request Form</title>
</head>
<body>
<br>
<br>
<br>
<div id="navigation">
      <!-- Begin Shell -->
      <div class="shell">
        <ul>
          <li ><a href="index.php" title="index.php">Home</a></li>
          <li>
            
                 <li>
            <a href="hereport.php">Hiring Report</a>
          </li>
             <li><a href="fbreport.php">Feedback Report</a></li>
            <li><a href="regreport.php">Account Report</a> </li>
            <li class="active"><a href="req.php">Request Product</a></li>
            <li><a href="../indexx.php">Logout</a></li>
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
      <h1 class="panel-title" style="text-align:center">Request Form</h1>
    </div>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="" method="POST" >
   <div class="form-group">
   <p >
                                <label class="col-sm-2 control-label" for="name"> Name:</label>
                                 <?php
                  
                    $name= mysqli_query($mysqli,"select * from product _name");

                    echo '<select style="width:725px;height:35px;border-radius:5px;color:black" name="name"  id="ml" class="ed">';
                    echo '<option selected="selected">Please select a product</option>';
                     while($res= mysqli_fetch_assoc($name))
                    {
                    echo '<option>';
                    echo $res['product_name'];
                    echo'</option>';
                    }
                    echo'</select>';
                    ?>


                            </p>
                            </div>
	<div class="form-group">	
    <label class="col-sm-2 control-label">Description:</label>
    <div class="col-sm-8">
      <input class="form-control" style="color:black" name="description" type="text" placeholder="Enter the description" required="">
    </div>
</div>
      <input class="form-control" style="color:black" name="department" type="hidden" placeholder="Enter the description" required=""value="Marketing & Sales">
   
<div class="form-group">
    <label class="col-sm-2 control-label">Quantity:</label>
    <div class="col-sm-8"> 
      <input class="form-control" style="color:black" name="quantity" type="integer" placeholder="Enter the quantity" required="">
    </div>
  </div>
       <div class="col-sm-8">
      <input type="submit" name="submit" class="btn btn-info" style="width:700px;margin-left:200" value="Submit">
        <br>
       </div>
       <br>
    <br>
    <br>
       
      
</form>
</div>
</div>
</div>
</div>
<br>
<br>
<br><br>
<br>
<br>
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
