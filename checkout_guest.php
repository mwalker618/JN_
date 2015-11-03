<?php
include "connect.php"; 





mysql_close();
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <?php include_once("template_header.php");?>

         

         





         

        <div class="row">
        
        	<div class="large-12 columns">
            	
            </div>
        
        	<div class="large-12 columns">
            	<h4>Checkout as Guest</h4>
            </div>
        <hr>
            
            <div class="large-12 columns">
                <form action="complete.php" method="post">
                      First Name: <input type="text" name="fname"><br>
                      Last Name: <input type="text" name="lname"><br>
                      
                      <h5>Shipping Address</h5><hr/>
                      
                      Street Address: <input type="text" name="address"><br>
                      City: <input type="text" name="city"><br>
                      Zip: <input type="text" name="zip"><br>
                      
                      <h5>Billing Address</h5><hr/>
                      
                      Street Address: <input type="text" name="address2"><br>
                      City: <input type="text" name="city2"><br>
                      Zip: <input type="text" name="zip2"><br>
                      
                      <h5>Payment Info</h5><hr/>
                      
                      Card Number: <input type="text" name="card"><br>
                      CSV: <input type="text" name="csv"><br>
                      Expiration Date: <input type="text" name="date"><br>
                      
                      <input type="submit" value="Submit">
                </form>
            	
            </div>
            
            
            <div class="large-6 columns">
            	
            	
            </div>
            
            
            

        </div>




 		<?php include_once("template_footer.php");?>
    
  </body>
</html>
