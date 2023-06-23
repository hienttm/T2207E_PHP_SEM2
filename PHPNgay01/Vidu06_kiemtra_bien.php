<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($hoten)){
            echo "<p>Xin chao $hoten</p>";
        }else{
            echo "<p>Chưa khởi tạo \$hoten</p> ";
        }
        $hoten="HIEN TRAN";
        echo "<p> Xin chào $hoten </p>";
        unset($hoten);
        echo "<p> Hello sau khi huỷ biến \$hoten : $hoten </p>";

        $a=10;
        echo "<p> a: " . gettype($a). "</p>";
        $b=10.5;
        echo "<p> b: " .gettype($b). " </p>";
        $c="môt con vit";
        echo "<p> c: " .gettype($c). "</p>";
        $ketqua=true;
        echo "<p> ketqua: " . gettype($ketqua). "</p>";
        echo "hehe";
    ?>
</body>
</html>