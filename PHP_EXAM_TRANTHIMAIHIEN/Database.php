<?php
//kết nối CSDL
function ConnectDB()
{
    $conn = NULL;
    try
    {
    $conn = new PDO("mysql:host=localhost;dbname=T2207E_PHP_EXAM","root","root");
    $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }
    catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";//thông báo lỗi hệ thống
    }
    return $conn;//trả về đối tượng PDO

}
function getListBooks($keyword=""){
    $conn=ConnectDB();
    if($conn==NULL)
        return -1; //Lỗi kết nối CSDL
    $sql="SELECT * FROM tbBooks WHERE TRUE";
    if($keyword!="")
        $sql .=" AND title LIKE '%$keyword%' ";
    $pdo_stm=$conn->prepare($sql);
    $ketqua=$pdo_stm->execute();
    if($ketqua== FALSE)
        return -2; // lỗi sql
    else{
        $rows=$pdo_stm->fetchAll();
        return $rows;
    }    
}
?>