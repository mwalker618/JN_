<?php  

$db_host = "sulley.cah.ucf.edu"; 
$db_username = "me049855";  
$db_pass = "G3ttangl3d!";  
$db_name = "me049855"; 


mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>