<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ví dụ mảng dạng Key:Value</h2>
    <?php
    $cart=array("SP01"=>2, "SP02"=>3);
    $cart["SP03"]=5;
    echo "<p> Giỏ hàng </p>";
    foreach($cart as $pcode=>$soluong){
        echo "<p> Mã SP: $pcode - số lượng SP: $soluong <p/>";
    }
    if(array_key_exists("SP04",$cart)){
        echo "<p> sản phẩm 04 có tồn tại trong giỏ hàng <p/>";
    }else
        echo "<p> sản phẩm 04 không có trong giỏ hàng <p/>";
        
        //lấy danh sách các key:
    $keys=array_keys($cart);
    echo " <p>Giỏ hàng </p>";
    for($i=0;$i<count($keys);$i++)
    {
        $key=$keys[$i];
    ?>
        <p>Mã SP: <?=$key?> - số lượng: <?=$cart[$key]?></p>
    <?php
    }
    // hiển thị cấu trúc mảng
    print_r($cart);
    echo "<br>";
    print_r($keys);
    ?>
</body>
</html>