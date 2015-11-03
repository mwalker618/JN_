<?php
include "connect.php"; 





mysql_close();
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Cart</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <?php include_once("template_header.php");?>

         

         





         

        <div class="row">
        <hr>

            <div class="large-12 columns">
             <h4>My Cart</h4><hr/>
            </div>
            
            <div class="row">
            
            <div class="large-4 columns">
            	<img src="http://placehold.it/100x100&text=[img]">
            </div>
            <div class="large-4 columns">
            	<h6>Product Name</h6>
            </div>
            <div class="large-4 columns">
            	<h5>$0.00</h5>
            </div>
            
            </div>
            <div class="row">
            
            <div class="large-4 columns">
            	<img src="http://placehold.it/100x100&text=[img]">
            </div>
            <div class="large-4 columns">
            	<h6>Product Name</h6>
            </div>
            <div class="large-4 columns">
            	<h5>$0.00</h5>
            </div>
            
            </div>
            <div class="row">
            
            <div class="large-4 columns">
            	<img src="http://placehold.it/100x100&text=[img]">
            </div>
            <div class="large-4 columns">
            	<h6>Product Name</h6>
            </div>
            <div class="large-4 columns">
            	<h5>$0.00</h5>
            </div>
            </div>
            
            <div class="large-12 columns">
             	<hr/>
            </div>
            
            
            <div class="large-6 columns">
            	<a href="home.php">Continue Shopping</a>
            </div>
            <div class="large-6 columns">
            	<a href="checkout.php" class="small button">Checkout</a>
            </div>
            
            
            

        </div>


        <div class="row">
        <hr>
        <div class="large-12 columns">
          <h4>You might also like:</h4>
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
        </div>
        </div>

 		<?php include_once("template_footer.php");?>
    
  </body>
</html>
