<?php
require_once("KetnoiCSDL.php");
function getListNhanvien()
{
    $conn=ConnectDB();
    if($conn==NULL)
            return NULL;
    $sql="SELECT * FROM tbnhanvien";
    $pdo_stm= $conn->prepare($sql);
    $ketqua=$pdo_stm->execute();
    if($ketqua==FALSE){
        return NULL;
    }
    else
    {
        $rows=$pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;
    }
}
//Thêm nhân viên

function AddNhanvien($hoten,$dienthoai,$gioitinh,$hinhanh)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "INSERT INTO tbNhanvien VALUES(NULL,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$dienthoai);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$hinhanh);
    $ketqua = $pdo_stm->execute();//thực thi câu sql, trả về TRUE/FALSE
    return $ketqua;
}

function getNhanvienById($id)
{
    $conn=ConnectDB();
    if($conn==NULL){
        return -1;
    }
    $sql="SELECT * FROM tbnhanvien WHERE id=?";
    try{
        $pdo_stm=$conn->prepare($sql);
        $pdo_stm->bindParam(1,$id);
        $ketqua= $pdo_stm->execute();
    }
    catch(PDOException $ex){
        echo "<p>" .$ex->getMessage() . "</p>";
        return -2;
    }
    if($ketqua==FALSE){
        return 0;
    }else{
        $row=$pdo_stm->fetch();
        return $row;
    }
    
}
function UpdateNhanvien($id,$hoten,$dienthoai,$gioitinh,$hinhanh){
    $conn=ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql="UPDATE tbNhanvien SET hoten=?, dienthoai=?, gioitinh=?, hinhanh=? WHERE id=?";
    $pdo_stm=$conn->prepare($sql);
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$dienthoai);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$hinhanh);
    $pdo_stm->bindParam(5,$id);
    $ketqua=$pdo_stm->execute();
    return $ketqua;
}
function DeleteNhanvien($id){
    $conn=ConnectDB();
    if($conn==NULL){
        return -1;
    }
    try{
        $sql="DELETE FROM tbNhanvien WHERE id=?";
        $pdo_stm=$conn->prepare($sql);
        $pdo_stm->bindParam(1,$id);
        $ketqua=$pdo_stm->execute();
    }
    catch(PDOException $ex){
        echo "<p>" . $ex->getMessage() . "</p>";
        return -2;//LỖI SQL
    }
    if($ketqua){
        return $pdo_stm->rowCount();
    }
}
?>
