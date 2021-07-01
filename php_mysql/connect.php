<?php


$servername = 'localhost';
$username = 'root';
$password = '123456';

//面向对象链接数据库
/*
$conn = new mysqli($servername,$username,$password);
if($conn->connect_errno)
{
    die("连接失败".$conn->connect_errno);
}
echo "链接成功";
//关闭连接
$conn->close();
*/


//面向过程链接数据库
/*
$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die('Connection failed:'.mysqli_connect_errno());
}
echo "面向过程链接成功";
//关闭连接
mysqli_close($conn);
*/



//PDO链接数据库
try{
    $conn = new PDO("mysql:host=$servername;",$username,$password);
    echo "PDO链接成功";
}catch (PDOException $e){
    echo $e->getMessage();
}
//关闭连接
$conn = null;