<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <h1>GIỎ HÀNG</h1>
    <H3><a href="Sanpham.php">Quay lại trang Sản phẩm</a></H3>
    <?php
    session_start();
    if(isset($_SESSION["cart"])==false || count($_SESSION["cart"])==0)
    {
    ?>
        <div class="pro">
            <p>Bạn chưa có sản phẩm nào trong giỏ hàng</p>
            <a href="Sanpham.php">Vào trang Danh sách sản phẩm</a>
        </div>
    <?php
    }
    else
    {
    ?>
        <form name="form1" id="form1" action="UpdateCart.php" method="post">
    <?php
        require("Database.php");
        $tongtien=0;
        foreach($_SESSION["cart"] as $id =>$soluong)
        {   
        $row=Tim_Sanpham_Theo_ID($id);
        $tongtien += $row["price"]*$soluong;
    ?>
        <div class="pro">
            <h3><?=$row["title"]?> - <?=$row["author"]?></h3>
            <p>Giá: <?=$row["price"]?> </p>
            <p align="right">
                Số lượng: <input type="text" name="qty[<?=$id?>]" value="<?=$soluong?>" size=5 >
            </p>
            <p align="right">
                Tổng tiền Sản phẩm: 
                    <b><?=number_format($row["price"]& $soluong)?></b>
            </p>
            <p align="right">
                <a href="DelCart.php?id=<?=$id?>">Xoá sản phẩm</a>
            </p>
        </div>
    <?php        
        } //for
    ?>
        <div class="pro">
            <h3 style="text-align: right; color: red">
                Tổng tiền: <?=number_format($tongtien)?>
            </h3>
            <p align="center">
            <input type="submit" name="b1" id="b1" value="Cập nhật số lượng"
                style="width:300px; height:50px; font-size:18px">
            </p>
            <p align="center">
                <a href="DelCart.php?id=0">XOÁ TẤT CẢ SẢN PHẨM</a>
            </p>
        </div>
        </form>
    <?php
    }    
    ?>
</body>
</html>