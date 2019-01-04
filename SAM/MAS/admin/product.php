<?php 
include("conn.php");
?>
<?php 
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Home </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="images/logo.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/> 
	 
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
						
					   <li><a href="productreport.php"> Sales</a></li>
					   	   <li>
						<a href="hereport.php">Hiring Report</a>
					</li>
					   <li><a href="fbreport.php">Feedback Report</a></li>
					  <li><a href="regreport.php">Account Report</a> </li>
					  <li><a href="req.php">Request Product</a> </li>
					  <li><a href="../indexx.php">Logout</a> </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<div style="height:50px;"></div>

<div class="container">
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading" style="background-color:skyblue">
      <h1 class="panel-title" style="text-align:center">For any concerns, write on the feedback form</h1>
    </div>
		<div>
				  <div>


					    <form method="POST" class="form-horizontal" role="form">
								<br>
								<?php
$prod_id = $_GET['id'];
$bid_info = "SELECT * from product_marketing where Product_ID='$prod_id'";
$bid_data=mysqli_query($conn,$bid_info);
while($bid_row=mysqli_fetch_array($bid_data)){

	$id=$bid_row['Product_ID'];
	$price=$bid_row['Price'];
	$quantity=$bid_row['quantity'];
?>
					    	<div class="form-group has-feedback">
    							<label class="col-sm-2 control-label">Product:</label>
						    	<div class="col-sm-8">
						    		<input type="hidden" value="<?php echo $id;?>" name="id">
						    		<input class="form-control" type="text" style="color:black" name="p_name" value="<?php echo $bid_row['productName']; ?> " >
						    		<span class="glyphicon glyphicon-user form-control-feedback"></span>
						    </div>
						    </div>
						    <div class="form-group has-feedback">		
						    	<label class="col-sm-2 control-label">Price:</label>
						    	<div class="col-sm-8">
						    	<input class="form-control" type="text" style="color:black"  name="price" type="email" id="email" value="<?php echo $price;?>"
								>
						    	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						    </div>
						    </div>
						    <div class="form-group has-feedback">
						     	<label class="col-sm-2 control-label">Quantity:</label>
						     	<div class="col-sm-8">
						    <input class="form-control" type="text" style="color:black"  name="quantity" id="contact" >
						    	<span class="glyphicon glyphicon-phone form-control-feedback"></span>
						    </div>
						    </div>
						   <div>
						   		<span><input class="form-control" style="margin-left:350px;width:450px;color:white;background-color:skyblue" type = "submit" name="submit" id="submit" value="SUBMIT"></span>
						  </div>
						  <br>
					    </form>
					    <?php 
if (isset($_POST['submit'])) {
	$p_name=$_POST['p_name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];

		mysqli_query($conn,"INSERT INTO product_order (productname,qty,price) VALUES ('$p_name','$quantity','$price')");
}
?>
				  </div>
  				</div>
  			</div>
  				</div>

  			</div>

<?php 
}
?>


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