<?php
session_start();
$id=isset($_REQUEST["id"])?$_REQUEST["id"]:"";
if($id==""||is_numeric($id)==false)
    die("<h3>Lỗi id</h3>");
if(isset($_SESSION["cart"]) && array_key_exists($id,$_SESSION["cart"]))
{   
    $soluong=$_SESSION["cart"][$id];
    $soluong+=1;
    $_SESSION["cart"][$id]=$soluong;

}
else
{
    $_SESSION["cart"][$id]=1;
}
header("location:Cart.php");
?>