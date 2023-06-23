<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST BOOKS</title>
    <style type="text/css">
        tr:nth-child(odd) {background-color: yellow;}
        tr:nth-child(even) {background-color: pink;}
        h2{color: red; text-align: center;}
    </style>
</head>
<body>
    <H1>BOOK MANAGEMENT</H1>
    <div id="search" style="width: 800px; margin: 10px auto;">
        <?php
            $keyword= isset($_REQUEST["keyword"])?$_REQUEST["keyword"]:"";
        ?>
        <form name="form1" id="form1" action="" method="get">
            <input type="text" name="keyword" id="keyword"
                placeholder="input name of book" value="<?=$keyword?>">
            <input name="b1" if="b1" type="submit" value="Search">
        </form>
    </div>
    <?php
        require("Database.php");
        $rows=getListBooks($keyword);
        if($rows== -1)
            die("<h2>LỖI KẾT NỐI CSDL</h2>");
        else if($rows == -2)
            die("<h2>LỖI SQL </h2>");
        else if(count($rows)==0)
        die("<h2>KHÔNG CÓ DỮ LIỆU</h2>");
    ?>
    <table width="800"  align="center" border="1" cellpadding="5">
        <tr bgcolor="pink" height="30">
            <th>Bookid</th>
            <th>Authorid</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pub_year</th>
            <th>Available</th>
        </tr>
        <?php
        foreach ($rows as $row)
        {
        ?>
        <tr height="30">
            <td><?=$row["bookid"]?></td>
            <td><?=$row["authorid"]?></td>
            <td><?=$row["title"]?></td>
            <td><?=$row["ISBN"]?></td>
            <td><?=$row["pub_year"]?></td>
            <td><?=$row["available"]?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>