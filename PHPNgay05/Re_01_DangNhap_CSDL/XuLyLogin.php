<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>XỬ LÝ LOGIN</title>
</head>
<body>
<h2> XỬ LÝ LOGIN</h2>
<?php
session_start();
$user=$_REQUEST["user"];
$password=$_REQUEST["password"];

//kết nối CSDL
$servername="localhost";
$userSQL="root";
$passSQL="root";
try {
    $conn = new PDO("mysql:host=$servername;dbname=T2207E_PHP", $userSQL, $passSQL);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
//truy vấn dữ liệu
$sql= "SELECT * FROM tbuser where username='$user' AND password=md5('$password')";
$pdo_stm=$conn->prepare($sql);
$ketqua=$pdo_stm->execute();
if($ketqua==FALSE){
    die("lỗi lệnh SQL");
}
if($pdo_stm->rowCount()>0){
    $row=$pdo_stm->fetch();
    $_SESSION["logined"]="OK";
    $_SESSION["user"]=$row["username"];
    $_SESSION["hoten"]=$row["hoten"];
    echo "<h3> Đăng nhập thành công</h3>";
    echo "<a href=\"Admin.php\">Mời vào trang Admin</a>";
}else{
    echo "<h3> Đăng nhập KHÔNG thành công</h3>";
    echo "<a href=\"Login.php\">Mời đăng nhập lại</a>";
}
?>
</body>
</html>