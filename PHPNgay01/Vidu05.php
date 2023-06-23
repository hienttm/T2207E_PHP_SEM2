<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ PHP</title>
    <style type="text/css">
        p:nth-child(odd) {background-color: yellow;}
        p:nth-child(even) {background-color: pink;}
    </style>
</head>
<body>
    <h1>Ví dụ lập trình PHP</h1>
    <?php 
        echo "<h2>HELLO FROM PHP</h2>";
        $n=7;
        $tong=0;
        for($i=0;$i<$n;$i++){
            echo "<p> $i - Lớp T2207E </p>";
            $tong+= ($i%2==1)?$i:0;
        }
    ?>
    <h3>Tổng các số lẻ từ 1 đến <?=$n?> là: <?=$tong?> </h3>
</body>
</html>