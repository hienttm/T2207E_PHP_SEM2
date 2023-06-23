<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>
    <h1>Demo Giỏ hàng</h1>
    <?php
    require("Database.php");
    $rows=DanhSach_SP();
    if($rows==-1)
        die("<h3>Lỗi kết nối CSDL</h3>");
    else if($rows==-2)
        die("<h3>Lỗi SQL</h3>");
    foreach($rows as $row)
    {
     ?>
        <div class="pro">
            <h2><?=$row["title"]?></h2>
            <p>Tác giả: <?=number_format($row["author"])?> - Giá <?=$row["price"]?> VNĐ</p>
            <p align="right"> <a href="Addcart.php?id=<?=$row["id"]?>">Thêm vào giỏ hàng</a></p>
        </div>
     <?php
    } 
    ?>
</body>
</html>