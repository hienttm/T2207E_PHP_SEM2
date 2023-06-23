<?php
session_start();
if(isset($_REQUEST["qty"])==FALSE)
    die("<p>LỖI FORM</p>");
$qty=$_REQUEST["qty"];
print_r($qty);
foreach ($qty as $id=> $soluong){
    $_SESSION["cart"][$id]=$soluong;
}    
header("localtion: Cart.php");
?>