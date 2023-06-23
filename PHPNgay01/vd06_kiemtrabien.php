<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Một số hàm cơ bản</title>
</head>
<body>
    <?php
    // isset($tenbien): để kiểm tra biến đã được gán giá trị chưa?
    if(isset($hoten))
    {
        echo "<p> Hello: $hoten </p>";
    }else
    {
        echo "<p>Chưa khởi tạo \$hoten</p>";
    }
       
    //unset($tenbien) : hủy giá trị của 1 biến
    $hoten = "ABC";
    echo "<h2> Hello : $hoten </h2>";
    // unset($hoten);
    // echo "<h2> Hello sau khi hủy \$hoten: \$hoten </h2>";
    
    // $a = 10;//a là kiểu số nguyên
    // echo "<p> a: " . gettype($a) . "</p>";
    // $b = 10.5;
    // echo "<p> b: " . gettype($b) . "</p>";
    // $s = "PHP";
    // echo "<p> s: " . gettype($s) . "</p>";
    // $ketqua = true;
    // echo "<p> ketqua: " . gettype($ketqua) . "</p>";
    //Kiểm tra biến được được khai báo?

    ?>
</body>
</html>