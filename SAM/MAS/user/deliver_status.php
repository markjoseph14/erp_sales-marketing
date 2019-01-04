<?php session_start();
if(empty($_SESSION['id'])):
endif;
?>
<head>
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Status</title>
<link rel="shortcut icon" href="images/LOGO.JPG" />

</head>
<body>
  
    <div class = "content">
      <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class = "col-md-9 col-lg-9">
          <div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left title">Deliver Summary</div>
                  <div class="widget-icons pull-right">
                    <a href="finish.php" class="btn btn-danger hideme"><i class="fa fa-sign-out"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd" style="height:650px">
                    <div class="alert alert-success">
                    </div>

                    
<hr>

<table style="width:100%">
<?php
include('dbcon.php');
    $rcode=$_REQUEST['rcode'];
    $query=mysqli_query($con,"select * from inventory where inventoryid='$rcode'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $rcode=$row['inventoryid'];
        $first=$row['action'];
        $last=$row['action'];
        $contact=$row['action'];

?>                      
                      <tr>
                        <td>Code: </td>
                        <td><?php echo $rcode;?></td>
                      </tr>
                      <tr>  
                        <td>Getting from supplier: </td>
                        <td><?php echo $last;?></td>
                      </tr>
                      <tr>
                        <td>Supply Chain Inventory: </td>
                        <td><?php echo $last;?></td>
                      </tr> 
                      <tr>
                        <td>Delivering: </td>
                        <td><?php echo $contact;?></td>
                      </tr>   
                       
                      
</table>
<br>
<div style="width:50%;float:left">
  <ul>
</body>
</html>



