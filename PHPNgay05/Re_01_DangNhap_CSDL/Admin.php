<?php
session_start();
require("KiemTraDangNhap.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Admin - Cần đăng nhập</title>
</head>
<body>
<h2>TRANG DÀNH CHO ADMIN</h2>
<p>Tài khoản: <?=$_SESSION["user"]?> </p>
<p>Họ tên: <?=$_SESSION["hoten"]?></p>
<h3><a href="Logout.php">Thoát</a></h3>
</body>
</html>