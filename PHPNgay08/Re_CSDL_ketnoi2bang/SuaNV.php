<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa nhân viên</title>
</head>
<body>
<h1 style="color:chartreuse; text-align:center">Sửa nhân viên</h1>
<?php
if(isset($_REQUEST["id"])==FALSE)
    die("<h3>Chưa có id nhân viên</h3>");
$id=$_REQUEST["id"];
if($id==""||is_numeric($id)==FALSE){
    die("<h3>Id không được rỗng và phải là số</h3>");
}

require("tblNhanvien.php");
$row=getNhanvienById($id);
if($row==-1)
    die("<h3>Lỗi kết nối CSDL</h3>");
if($row==-2)
    die("<h3>Lỗi Lệnh SQL</h3>");
if($row==0)
    die("<h3>Không tìm thấy nhân viên có ID= $id </h3>");
//lấy thông tin nhân viên để hiển thị vào form
$hoten = $row["hoten"];
$dienthoai = $row["dienthoai"];
$gioitinh = $row["gioitinh"];
$hinhanh = $row["hinhanh"];
$maphong= $row["maphong"];
?>
<form name="form1" action="XylySuaNV.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?=$id?>">
    <table width="446" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="155">Phòng ban</td>
        <td width="271">
          <select name="maphong" id="maphong">
            <option value="0">Chọn phòng ban</option>
            <?php
            require_once("Thuvien.php");
            TaoSelect("tbPhongBan","maphong","tenphong",$maphong);
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td width="155">Họ tên</td>
        <td width="271"><input type="text" name="tHoten" id="tHoten" value="<?=$hoten?>"></td>
      </tr>
      <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="tDienthoai" id="tDienthoai" value="<?=$dienthoai?>"></td>
      </tr>
      <tr>
        <td>Giới tính</td>
        <td>
        <label for="r1">Nam</label>
        <input type="radio" name="rGioitinh" id="r1" value="0" <?=($gioitinh==0)?"checked":""?>>
        <label for="r2">Nữ</label>
        <input type="radio" name="rGioitinh" id="r2" value="1" <?=($gioitinh==1)?"checked":""?>>
        </td>
      </tr>
      <tr>
        <td>Hình ảnh hiện tại</td>
        <td>
          <img src="Hinhanh/Nhanvien/<?=$hinhanh?>" width="100">
          <input type="text" name="tHinhanh" id="tHinhanh" value="<?=$hinhanh?>" readonly></td>
      </tr>
      <tr>
        <td>Hình ảnh thay thế</td>
        <td>
          <input type="file" name="fHinhanh" id="fHinhanh" ></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input type="submit" name="b1" id="b1" value="Đồng ý">
        &nbsp;&nbsp;
        <input type="reset" name="b2" id="b2" value="Nhập lại">
        </td>
      </tr>
    </table>
</form>
</body>
</html>