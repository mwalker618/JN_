<?php
include "connect.php"; 

$id = $_GET['id'];
$product = "";
$sql = mysql_query("SELECT * FROM products WHERE productID='$id'");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $image = $row["image"];
			 $stock = $row["stock"];
			 $category = $row["productCategory"];
			 $description = $row["description"];
			 

    }
} 
$category = $row["productCategory"];
$featured = "";
$sql = mysql_query("SELECT * FROM products WHERE productCategory='$category' DESC LIMIT 4");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["productID"];
			 $productName = $row["productName"];
			 $image = $row["image"];
			$featured .= '<a href="product.php?id=' . $id . '"> <img src="' . $image . '"/></a>';
    }
} else {
	$featured = "We have no products listed in our store yet";
}

$like .= '<a href="like.php?id=' . $id . '" class="small buttton"> Like </a>';


mysql_close();
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $productName; ?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <?php include_once("template_header.php");?>

         

         





         

        <div class="row">
            <div class="large-12 columns">
                <a href="<?php echo $category; ?>.php">Back to <?php echo $category; ?></a>
            </div>
        	<hr>

            <div class="large-6 columns">
             	 <img src="<?php echo $image; ?>">
            </div>
        	<div class="large-6 columns">
                  <h4> <?php echo $productName ?></h4>
                  <p><?php echo $description ?></p>
			</div>
            <div class="large-6 columns">
            	<img src="img/like.png" />
              
            </div>
            <div class="large-6 columns">
              <a href="cart.php" class="small button">Add to Cart</a>
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
