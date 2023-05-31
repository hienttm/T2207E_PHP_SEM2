<?php
session_start();
if(isset($_SESSION["logined"])==""||isset($_SESSION["logined"])==false){
?>
    <p>Đăng nhập không thành công. </p>
    <a href="Login.php">Vui lòng đăng nhập lại</a>
<?php
    die();
}
?>