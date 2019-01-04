<?php
session_start();
include("config.php");
include("conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Product Report </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	<link rel="shortcut icon" href="images/logo.JPG" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	
		 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
	
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">

				<div id="top-nav">
					<ul>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>

</dd>
</dl>
</div>
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
							<ul>
								<li>
									 <a href="warehouse_1.php"> FoodStuff</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_1.php">Fruits</a></li>
                                            <li><a href="warehouse_1.php">Biscuits</a></li>
										</ul>
									</div>
								</li>
								<li>
									 <a href="warehouse_2.php"> Beverage</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_2.php">Bavarian</a></li>
                                             <li><a href="warehouse_2.php">Reddbull</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_3.php"> Cleaning Material</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_3.php">Fairy</a></li>
                                            <li><a href="warehouse_3.php">Harpic</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_4.php"> Clothes</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_4.php">Suit</a></li>
                                              <li><a href="warehouse_4.php">T.shirts</a></li>
										</ul>
									</div>
								</li>
								
							</ul>
						</div>
					</li>
					   <li class="active"><a href="productreport.php">Sales</a></li>
							  	   <li>
						<a href="hereport.php">Hiring Report</a>
						<div class="dd">
						</div>
					</li>
					</li>
					  <li><a href="fbreport.php"> Feedback Report</a></li>
					  <li><a href="regreport.php">Account Report</a> </li>
					  <li><a href="req.php">Request Product</a> </li>
					  <li><a href="../indexx.php">Logout</a></li>
				</ul>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
     <br>
<br>
<br>		
<div class="viewcart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["cart_session"]))
    {
	    $total = 0; 	
		
		echo '<form method="post" action="cart_update.php">';
		echo '<table cellspacing="0">';
			  echo   '<thead>';
		  echo '<tr>';
		  echo '<td>Product:</td>';
		  echo '<td>Quantity:</td>';
		  echo '<td>Amount:</td>';
		  echo '</tr>';
		  echo '</thead>';
		  
		$cart_items = 0;
		foreach ($_SESSION["cart_session"] as $cart_itm)
        {
           $Product_ID  = $cart_itm["code"];
		   $results = $mysqli->query("SELECT productName,Price FROM product_marketing WHERE Product_ID='$Product_ID'"); 
          if ($results) { 
		  
	        
			
          //fetch results set as object and output HTML
          while($obj = $results->fetch_object())
        {
			
		  
		    echo '<tr class="cart-itm">';
            echo '<td><h3>'.$obj->productName.'</h3></td> ';
            echo '<td class="p-qty"><input type="text" name="product_qty" value="'.$cart_itm["TiradaProductTiga"].'" size="2"   maxlength="5" disabled/></td>';
		    echo '<td class="p-price" style="color:green"><b>'.$currency.$obj->Price.'</b></td>';
            echo '</tr>';
			$subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->productName.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$Product_ID.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["TiradaProductTiga"].'"/>';
			$cart_items ++;
			      		    }}}

    
		echo '<span class="check-out-txt">';

    	echo '</table>';
		echo '<span> <h4 class="pricewayn"> Total Amount : <big style="color:green">'.$currency.$total.'</big> </h4></span> ';

		echo '</span>';
		echo '</form>'; 

   }else{        
		
	}
	
    ?>
    </div><br><br><br>
    <div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="invTable">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Date</th>
                        <th>Customer</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$iq=mysqli_query($conn,"select * from product_marketing left join sales on product_marketing.Product_ID=sales.salesid where userid='2'")or(die($iq));
					while($iqrow=mysqli_fetch_array($iq)){
						

                      $item_q = mysqli_query($conn,"select * from customer where userid = userid");
                      $row = mysqli_fetch_array($item_q);
                      $customer=$row['customer_name'];
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y h:i A',strtotime($iqrow['sales_date'])); ?></td>
							<td align="middle"><?php echo $customer; ?></td>
							<td align="middle"><?php echo $iqrow['productName']; ?></td>
							<td align="middle"><?php echo $iqrow['quantity']; ?></td>
							<td align="middle"><?php echo $iqrow['Price']; ?></td>
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
		<!-- End Main -->

	</div>
	<!-- End Wrapper -->

	
		</div>
		<!-- End Footer -->
</body>
</html>