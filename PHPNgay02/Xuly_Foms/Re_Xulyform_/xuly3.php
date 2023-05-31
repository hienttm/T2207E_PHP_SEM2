<?php
if(isset($_REQUEST["bSubmit"])==false){
    echo "<p><a href='form3.php'>ĐĂNG NHẬP TỪ FORM</a></p>";
    die();
}
$username=$_REQUEST["username"];
$pass=$_REQUEST["pass"];

echo "<p> Username: $username - Password: $pass </p>";
?>