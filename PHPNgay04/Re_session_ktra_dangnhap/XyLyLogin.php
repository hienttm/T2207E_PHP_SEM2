<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý đăng nhập</title>
</head>
<body>
<h2> Xử lý đăng nhập</h2>
<?php
session_start();
$user =$_REQUEST["tUser"];
$pass=$_REQUEST["tPassword"];
if($user="admin" && $pass="123456")
{
    $_SESSION["logined"]="OK";
    $_SESSION["user"]=$user;
?>
    <p>Đăng nhập thành công</p>
    <a href="Admin.php">Mời vào trang Admin</a>
<?php
}else
{
?>
    <p>Đăng nhập KHÔNG thành công</p>
    <a href="Login.php">Mời đăng nhập lại</a>
<?php
}
?>
</body>
</html>