<?php
if(isset($_SESSION["logined"])==false || $_SESSION["logined"]==""){
?>
    <h3 style="color: red"> BẠN CHƯA ĐĂNG NHẬP </h3>
    <a href="Login.php">Mời đăng nhập </a>
<?php
    die();
}
?>