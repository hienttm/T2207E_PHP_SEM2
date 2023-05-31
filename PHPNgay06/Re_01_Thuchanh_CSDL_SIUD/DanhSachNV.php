<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
<h1 style="color:forestgreen; text-align: center ">DANH SÁCH NHÂN VIÊN</h1>
<p><a href="ThemNV.php">Thêm nhân viên</a></p>
<?php
require("KetnoiCSDL.php");
$sql="SELECT * FROM tbNhanvien";
$pdo_stm=$conn-> prepare($sql);
$ketqua=$pdo_stm->execute();
if($ketqua==FALSE){
    die("<h3>Lỗi câu lệnh SQL</h3>");
}
if($pdo_stm->rowCount()<=0){
    die("<h3>Chưa có dữ liệu</h3>");
}
$rows=$pdo_stm->fetchAll(PDO::FETCH_BOTH);
?>
<table width="974" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr bgcolor="#FFCC33">
        <td width="80">ID</td>
        <td width="210">Họ tên</td>
        <td width="166">Điện thoại</td>
        <td width="139">Giới tính</td>
        <td width="132">Hình ảnh</td>
        <td width="173">Xử lý</td>
    </tr>
    <?PHP
    foreach($rows as $row)
    {
    ?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["hoten"]?></td>
        <td><?=$row["dienthoai"]?></td>
        <td><?=($row["gioitinh"]==0)?"Nam":"Nữ"?></td>
        <td><?=$row["hinhanh"]?></td>
        <td>
            <a href="SuaNV.php?id=<?=$row["id"]?>">Sửa</a>
             - 
             <a href="XoaNV.php?id=<?=$row["id"]?>"
                 onclick="return confirm('Chắc chắn xoá?');">Xoá</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>