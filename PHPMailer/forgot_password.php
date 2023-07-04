<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h3>Forgot Password</h3>
    <form action="" method="post">
        <p>Your Email: 
            <input type="email" name="txtmail" id="txtmail">
        </p>
        <button type="submit" name="b1" id="b1">Send</button>
    </form>
</body>
</html>
<?php
require_once("sendmail.php");
if(isset($_REQUEST["b1"])==false){
    echo "submit để lấy lại mật khẩu";
}else
{
    $email=$_REQUEST["txtmail"];
    $name=$_REQUEST["txtmail"];
    $code=random_int(111111,999999);
    
    $ketqua=sendEmail($email,$name,$code);
    if($ketqua)
        echo "Thanh cong";
    else
        echo "false";
}
?>