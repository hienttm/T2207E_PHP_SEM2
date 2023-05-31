<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
<h1 style="text-align:center; color:green">DANH SÁCH NHÂN VIÊN</h1>
<a href="ThemNV.php">thêm nhân viên</a>
<table width="1109" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="87" bgcolor="#FF9900">ID</td>
        <td width="212" bgcolor="#FF9900">HỌ TÊN</td>
        <td width="150" bgcolor="#FF9900">ĐIỆN THOẠI</td>
        <td width="165" bgcolor="#FF9900">GIỚI TÍNH</td>
        <td width="209" bgcolor="#FF9900">HÌNH ẢNH</td>
        <td width="100" bgcolor="#FF9900">PHÒNG BAN</td>
        <td width="172" bgcolor="#FF9900">XỬ LÝ</td>
    </tr>
<?php
require_once("tblNhanvien.php");
$rows=getListNhanvien();
if($rows==NULL){
    die("<p>LỖI CƠ SỞ DỮ LIỆU</p>");
}
foreach ($rows as $row)
{
    $hinhanh=$row["hinhanh"]!=""?$row["hinhanh"]:"no-image.png";
?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["hoten"]?></td>
        <td><?=$row["dienthoai"]?></td>
        <td><?=$row["gioitinh"]==0?"Nam":"Nữ"?></td>
        <td><img src="Hinhanh/Nhanvien/<?=$hinhanh?>" width="100"></td>
        <td><?=$row["tenphong"]?></td>
        <td>
            <a href="SuaNV.php?id=<?=$row["id"]?>">Sửa</a> -
                <a href="XoaNV.php?id=<?=$row["id"]?>" onclick="return confirm('Chắc chắn xoá?')">Xoá</a>
        </td>
    </tr>
<?php
}
?>
</table>
</body>
</html>