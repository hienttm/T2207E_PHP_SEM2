<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng xuất</title>
</head>
<body>
<?php
session_start();
session_destroy();
?>
<h3>ĐÃ ĐĂNG XUẤT</h3>
<a href="Login.php">Mời đăng nhập lại</a>
</body>
</html>