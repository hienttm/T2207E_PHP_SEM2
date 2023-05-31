<?php
require_once("KetnoiCSDL.php");
function UploadFile($inputName, $Folder)
{
    if(isset($_FILES[$inputName]) && $_FILES[$inputName]["error"]==0)
    {
        $tenanh=$_FILES[$inputName]["name"];
        $temp_file=$_FILES[$inputName]["tmp_name"];
        move_uploaded_file($temp_file,"$Folder/$tenanh");
        return $tenanh;
    }else
        return "";
}
function TaoSelect($tenbang,$cotid,$cotname,$selectedid)
{
    $conn=ConnectDB();
    $sql="SELECT * FROM $tenbang";
    $pdo_stm=$conn->prepare($sql);
    $ketqua=$pdo_stm->execute();
    $rows=$pdo_stm->fetchAll();
    foreach($rows as $row){
        $id=$row[$cotid];
        $ten=$row[$cotname];
        if($id==$selectedid)
            echo "<option value='$id' selected> $ten </option>\n";
		else
			echo "<option value='$id' > $ten </option>\n";	
        
    }
}
?>