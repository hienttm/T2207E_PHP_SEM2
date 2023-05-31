<?php
require("tblNhanvien.php");
require("Thuvien.php");
if(isset($_REQUEST["b1"])==FALSE){
    die("<p> chưa nhập form </p>");
}
$id=$_REQUEST["id"];
$hoten=$_REQUEST["tHoten"];
$dienthoai=$_REQUEST["tDienthoai"];
$gioitinh="0";
if(isset($_REQUEST["rGioitinh"])==TRUE)
    $gioitinh=$_REQUEST["rGioitinh"];

$maphong=$_REQUEST["maphong"];
$hinhanh=UploadFile("fHinhanh","Hinhanh/Nhanvien");
if($hinhanh=="")
    $hinhanh=$_REQUEST["tHinhanh"];

$ketqua=UpdateNhanvien($id,$hoten,$dienthoai,$gioitinh,$hinhanh,$maphong);
if($ketqua==TRUE){
    echo "<h3>THÀNH CÔNG</h3>";
}else
    echo "<h3>LỖI SỬA DỮ LIỆU</h3>";
?>
<a href="DanhSachNV.php">Danh sách nhân viên</a>