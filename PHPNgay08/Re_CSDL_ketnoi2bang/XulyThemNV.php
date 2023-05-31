<?php
require_once("tblNhanvien.php");
require_once("Thuvien.php");
if(isset($_REQUEST["b1"])==FALSE){
    die("<p>Chưa nhập form</p>");
}
$hoten=$_REQUEST["tHoten"];
$dienthoai=$_REQUEST["tDienthoai"];
$gioitinh=0;
if(isset($_REQUEST["rGioitinh"])==TRUE)
    $gioitinh=$_REQUEST["rGioitinh"];
$hinhanh=UploadFile("fHinhanh","Hinhanh/Nhanvien");
$maphong=$_REQUEST["maphong"];
$ketqua=AddNhanvien($hoten,$dienthoai,$gioitinh,$hinhanh,$maphong);

if($ketqua==TRUE)
    echo "<h3>Thêm thành công</h3>";
else
    echo "<h3>LỖI THÊM DỮ LIỆU</h3>";
?>
<a href="DanhSachNV.php">DANH SÁCH NHÂN VIÊN</a>