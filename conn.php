<?php


 
/* Attempt to connect to MySQL database */
$db = mysqli_connect('localhost', 'id19544428_product', 'J}F1^Q\9p7m)G/EP', 'id19544428_shop');
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
