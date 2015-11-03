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
                <h4>Thank you <?php echo $_POST["fname"]; echo $_POST["lname"]; ?></h4>
                <h5>Your shipment is on its way</h5>
            </div>
            
            <div class="large-6 columns">
                <h4>Shipment Info</h4><hr>
                
                <p><?php echo $_POST["address"]; ?></p>
                <p><?php echo $_POST["city"]; ?></p>
                <p><?php echo $_POST["zip"]; ?></p>
                
            </div>
            
            <div class="large-6 columns">
                <h4>Billing Info</h4><hr>
                
                <p><?php echo $_POST["address2"]; ?></p>
                <p><?php echo $_POST["city2"]; ?></p>
                <p><?php echo $_POST["zip2"]; ?></p>
                
            </div>
            
            
            
           
            
            
            

        </div>




 		<?php include_once("template_footer.php");?>
    
  </body>
</html>
