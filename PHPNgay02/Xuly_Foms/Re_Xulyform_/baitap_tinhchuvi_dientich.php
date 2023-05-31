<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH CHU VI, DIỆN TÍCH HÌNH CHỮ NHẬT</title>
    
</head>
<body>

    <?php
    
    $chieudai="";
    $chieurong="";
    $loi="";
    $chuvi=0;
    $dientich=0;
    if(isset($_REQUEST["bSubmit"])==true){
        $chieudai=$_REQUEST["chieudai"];
        $chieurong=$_REQUEST["chieurong"];
        if($chieudai =="" || $chieurong==""){
            $loi ="chưa nhập đủ chiều dài và chiều rộng";
        }else if(is_numeric($chieudai)==false|| is_numeric($chieurong)==false)
        {
            $loi="chiều dài và chiều rộng phải nhập số";
        }
        if($loi ==""){
            $chuvi= ($chieudai+$chieurong)*2;
            $dientich= $chieudai*$chieurong;
        }
    }
    
    ?>


    <h2>Tĩnh chu vi và diện tích Hình chữ nhật</h2>
    <div style="color:red"><?=$loi?></div>
    <form name="form3" id="form3" method="post">
        <p>Chiều dài: <input type="text" name="chieudai" id="chieudai" value= <?=$chieudai?>></p>
        <p>Chiều rộng: <input type="text" name="chieurong" id="pass" value = <?=$chieurong?>></p>
        <p><input type="submit" name="bSubmit" value="Đồng ý"></p>

    </form>
    <p>chu vi: <?=$chuvi?> </p>
    <p>diện tích: <?=$dientich?> </p>

    
</body>
</html>