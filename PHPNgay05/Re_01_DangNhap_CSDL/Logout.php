<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>
<body>
<?php
session_start();
session_destroy();
?>
<h3 style="color:blue">Đã đăng xuất</h3>
<a href="Login.php">Mời đăng nhập lại</a>
</body>
</html>