<?php
try
{
    $conn=new PDO("mysql:host=localhost;dbname=T2207E_PHP","root","root");
    $conn->query("SET NAMES UTF8");

}
catch(PDOException $ex)
{
    echo "<p> .$ex ->getMessage() .</p>";
    die("<h3> LỖI KẾT NỐI CSDL </h3>");
}
?>
