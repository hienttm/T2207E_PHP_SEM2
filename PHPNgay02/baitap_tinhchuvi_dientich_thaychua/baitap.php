<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hình chữ nhật</title>
</head>
<body>
<?php
//include("inc_functions.php");
require("inc_functions.php");
$dai="";
$rong="";
$chuvi =0;
$dientich = 0;
$loi = "";
if(isset($_REQUEST["dai"])==true)//nếu form đã submit
{
$dai = $_REQUEST["dai"];
$rong = $_REQUEST["rong"];
//Kiểm tra lỗi
if($dai=="" || $rong=="")
    $loi= "Chưa nhập đủ chiều dài và rộng";
else if(is_numeric($dai)==false || is_numeric($rong)==false)
    $loi= "chiều dài và rộng phải nhập số";
//không có lỗi thì tính chu vi và diện tích
if($loi=="")
{
$chuvi = Chuvi($dai,$rong);
$dientich = Dientich($dai,$rong);
}
}
?>
<h2>Tính chu vi và diện tích Hình chữ nhật</h2>

<div style="color:red"><?=$loi?></div>
<form name="f1" id="f1" method="get" action="">
Chiều dài: <input type="text" name="dai" value="<?=$dai?>"><br><br>
Chiều rộng:<input type="text" name="rong" value="<?=$rong?>"><br><br>
<input type="submit" name="b1" id="b1" value="Tính CV và DT">
</form>
<p> Chu vi = <?=$chuvi?> </p>
<p> Diện tích = <?=$dientich?> </p>
</body>
</html>