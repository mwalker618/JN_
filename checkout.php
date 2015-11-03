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
        <hr>
            <div class="large-12 columns">
            	<h4>Checkout</h4>
            </div>
            <div class="large-6 columns">
                <form action="client.php" method="post">
                      Username: <input type="text" name="fname"><br>
                      Password: <input type="text" name="lname"><br>
                      <input type="submit" value="Submit">
                </form>
            	
            </div>
            
            
            <div class="large-6 columns">
            	
            	<a href="checkout_guest.php" class="small button">Checkout as Guest</a>
            </div>
            
            
            

        </div>




 		<?php include_once("template_footer.php");?>
    
  </body>
</html>
