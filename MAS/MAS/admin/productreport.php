<?php
session_start();
include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Product Report </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	<link rel="shortcut icon" href="images/favicon.png" />
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
					   <li class="active"><a href="productreport.php"> Product Report</a></li>
							  	   <li>
						<a href="hereport.php">Hiring Report</a>
						<div class="dd">
						</div>
					</li>
					</li>
					  <li><a href="#">About Us</a></li>
					  <li><a href="fbreport.php"> Feedback Report</a></li>
					  <li><a href="regreport.php">Account Report</a> </li>
					  <li><a href="../indexx.php">Logout</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
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
		  echo '<td>Price:</td>';
		  echo '<td>Size:</td>';
		  echo '<td>Color:</td>';
		  echo '</tr>';
		  echo '</thead>';
		  
		$cart_items = 0;
		foreach ($_SESSION["cart_session"] as $cart_itm)
        {
           $Product_ID  = $cart_itm["code"];
		   $results = $mysqli->query("SELECT productName,Price FROM product  WHERE Product_ID='$Product_ID'"); 
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
		echo '<span> <h4 class="pricewayn"> Grand Total : <big style="color:green">'.$currency.$total.'</big> </h4></span> ';

		echo '</span>';
		echo '</form>'; 

   }else{        
		echo '<span class="wacwayn"><i>Your Cart is empty</i></span>';
	}
	
    ?>
    </div><br><br><br>
			<br> <br> <br> <br> 
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>

					You can be confident when you're shopping online with Store. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.</p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->

			<div class="cl">&nbsp;</div>
			
			
		</div>
		<!-- End Main -->

	</div>
	<!-- End Wrapper -->

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
					</div>	<p>&copy; Groups <a href="index.php"><i><font color="fefefe"> Welcome To Store Online Shopping Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2018 Store.com All rights reserved. The information contained in Store.com may not be published, broadcast, rewritten, or redistributed without the prior written authority of Store.com
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->
</body>
</html>