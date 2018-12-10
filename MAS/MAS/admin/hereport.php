<?php include 'hireemployeecon.php';
if (isset($_GET['edit'])) {
  $name= $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db,"SELECT * FROM tb_employee WHERE name='$name'");
  $record = mysqli_fetch_array($rec);
  $name = $record['name'];
  $position = $record['position'];
  $salary = $record['salary'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Hiring Report</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="icon" type="icon" href="img/newnemarlogo.jpg">
    <link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="images/favicon.png" />
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
          <li ><a href="index.php" title="index.php">Home</a></li>
          <li>
            
             <li><a href="productreport.php"> Product Report</a></li>
                 <li class="active">
            <a href="hereport.php">Hiring Report</a>
          </li>
            <li><a href="#">About Us</a></li>
             <li><a href="fbreport.php">Feedback Report</a></li>
            <li><a href="regreport.php">Account Report</a> </li>
            <li><a href="../indexx.php">Logout</a></li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Shell -->
    </div>
    <br>
<div class="container-fluid" >  
   <h2 style="text-align:center;color:blue">Hiring Report</h2>
    <div id="printableArea"><center><div><table class="table table-bordered table-striped" style="width:800px;float:center">
    <thead style="background-color:green">
      <tr style="color:white">
          <th style="text-align:center">Full Name</th>
          <th style="text-align:center">Gender</th>
          <th style="text-align:center">Contact</th>
          <th style="text-align:center">Email</th>
          <th style="text-align:center">Location</th>
          <th style="text-align:center">Skills</th>
          <th style="text-align:center">Certification</th>
          <th style="text-align:center">Position to Apply</th>
          <th style="text-align:center">Educational Attainment</th>
          <th style="text-align:center">Age</th>
      </tr>
    </thead>
    <tbody>
       <?php while ($row = mysqli_fetch_array($results)) { ?>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['contact'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['work'];?></td>
          <td><?php echo $row['skills'];?></td>
          <td><?php echo $row['certification'];?></td>
          <td><?php echo $row['position'];?></td>
          <td><?php echo $row['attainment'];?></td>
          <td><?php echo $row['age'];?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table></div></center></div>
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
          <div class="box last-box">
            <h2>Categories</h2>
            <ul>
              <li><a href="#" title="Clothes">Clothes</a></li>
              <li><a href="#" title="Cleaning Material">Cleaning Material</a></li>
              <li><a href="#" title="Fizzi Drinks">Fizzy Drinks</a></li>
              <li><a href="#" title="Food Stuff">Food Stuff</a></li>
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
            <ul>
        
            </ul>
          </div>  <p>&copy; Groups <a href="index.php"><i><font color="fefefe"> Welcome To Store Online Shopping Site </font></i></a></p>
          <div class="cl">&nbsp;</div>
          Copyright © 2018 Store.com All rights reserved. The information contained in Store.com may not be published, broadcast, rewritten, or redistributed without the prior written authority of Store.com
        </div>
        <!-- End Shell -->
      </div>
    </div>


</body>
</html>