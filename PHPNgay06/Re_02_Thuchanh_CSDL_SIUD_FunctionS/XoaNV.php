<?php
require("tblNhanvien.php");
if(isset($_REQUEST["id"])==FALSE){
    die("<p>Chưa có id nhân viên</p>");
}
$id=$_REQUEST["id"];
if($id==""||is_numeric($id)==false){
    die("<p>ID không được rỗng hoặc phải là số</p>");
}
$ketqua=DeleteNhanvien($id);
if($ketqua==-1)
    echo "<p>Lỗi kết nối CSDL </p>";
else if($ketqua==-2)
    echo "<p>Lỗi SQL </p>";
else if($ketqua==0)
    echo "<p>Không có nhân viên có id = $id </p>";
else
    echo "<p>THÀNH CÔNG </p>";
?>
<a href="DanhSachNV.php">Danh sách nhân viên</a>