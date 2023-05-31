<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array();
    $arr[0]=1;
    $arr[1]=2;

    $a=["hien","duong","linh"];

    $b=array("Hien","Linh");
    $c=array();
    $c[0]="hIEN";
    $n=count($a);
    echo "<p>số phần tử trong mảng a là: $n </p>";
    for ($i=0;$i<count($a);$i++){
        if(isset($a[$i])){
            echo "<p>Phần tử thứ $i là: $a[$i]</p>";
        }
    }
    foreach ($arr as $d){
        echo "<p>$d</p>";
    }
    ?>
</body>
</html>