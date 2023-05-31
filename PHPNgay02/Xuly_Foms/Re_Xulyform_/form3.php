<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý form</title>
    <script>
        function kiemtra() {
            username=document.getElementById("username");
            pass=document.getElementById("pass");
            if(username.value==""|| pass.value==""){
                alert("Chưa nhập username hoặc pass");
                return false;
            }else{
                alert("Ok");
                return true;
            }
        }
    </script>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form name="form3" id="form3" action="xuly3.php" 
    method="post" onsubmit="return kiemtra()">
        <p>Username: <input type="text" name="username" id="username"></p>
        <p>Password: <input type="password" name="pass" id="pass"></p>
        <p><input type="submit" name="bSubmit" value="Đồng ý"></p>

    </form>
    <a href="xuly3?username=abc&&pass=123&&bSubmit==1" onclick="return confirm('Chắc chắn tiếp tục?');">Xoá tài khoản </a>
</body>
</html>