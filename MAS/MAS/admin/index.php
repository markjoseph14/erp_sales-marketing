<?php include("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="images/logo.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 

	 
	 <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />

		<script>
			/*
				VIEWPORT BUG FIX
				iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
			*/
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	
	 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
	
<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->

<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id=""><a class="notext" href="#" title="Suncart">Logo</a></h1>
				
				<div id="top-nav">
					<ul>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li>
						
					   <li><a href="productreport.php"> Product Report</a></li>
					   	   <li>
						<a href="hereport.php">Hiring Report</a>
					</li>
					  <li><a href="#">About Us</a></li>
					   <li><a href="fbreport.php">Feedback Report</a></li>
					  <li><a href="regreport.php">Account Report</a> </li>
					  <li><a href="../indexx.php">Logout</a> </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->
<!-- Begin Slider -->
		<div id="slider">
			<!-- Begin Shell -->
			<div class="shell">
				<ul class="slider-items">
					<li>
						<img src="images/99.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>White Suit</span><span class="small"> </span> </h3>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/888.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>Formal Attire</span><span class="button"></span> &nbsp; </h3>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/s3.png" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>Black Suit</span><span class="small"> </span>Dress<span class="small"> And Coats</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
							<li>
						<img src="images/999.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>Semi Formal </span><span class="small"> </span></h3> 
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/111.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>Semi Casual</span><span class="small"></span><span></span></h4>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/222.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>Casual Attire</span><span class="small"></span> </h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/333.png" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span>Assorted</span></h2>
						
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
			
						</div>
					</li>
				</ul>
				<div class="cl">&nbsp;</div>
				<div class="slider-nav">
					
				</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
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
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>Top Clothes</h2>
						<div class="brands">
							<ul>
								<li><a href="#" title="Brand 1"><img src="images/44.png" width="103" height="51" alt="Brand 1" /></a></li>
								<li><a href="#" title="Brand 2"><img src="images/55.png" width="103" height="51" alt="Brand 2" /></a></li>
								<li><a href="#" title="Brand 3"><img src="images/66.png" width="103" height="51" alt="Brand 3" /></a></li>
								<li><a href="#" title="Brand 4"><img src="images/33.png" width="103" height="51" alt="Brand 4" /></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->
			<div id="products">
				<h2>Featured Products</h2>

	      <div class="section group">
		  
		  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid_1_of_4 images_1_of_4">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->Picture.'"></div>';
            echo '<div class="product-content"><h2><b>'.$obj->productName.'</b> </h2>';
            echo '<div class="product-desc">'.$obj->Description.'</div>';
            echo '<div class="product-info">';
			echo '<p><span class="price"> Price:<big style="color:green">'.$currency.$obj->Price.'</big></span></p>';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<select name="size" id="select" style="width:200px"><option value="small">Please select a size</option><option value="small">Small</option><option value="medium">Medium</option><option value="large">Large</option></select>';
            echo '<select name="color" id="select" style="width:200px"><option value="small">Please select a color</option><option value="black">Black</option><option value="white">White</option><option value="black&white">Black & White</option></select>';
			echo '<div class="button"><span><img src="images/cart.jpg" alt="" /><button class="cart-button"  class="add_to_cart">Add to Cart</button></span> </div>';
			echo '</div></div>';
            echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
           
        }
    
    }
    ?>
    </div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
			
  
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products Slider -->
			
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
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
							<li><a href="login.php" title="Log In">Login</a></li>
							<li><a href="signup.php" title="Account">Sign Up</a></li>

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