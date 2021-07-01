<?php
$servername = 'localhost';
$username = 'root';
$password = '123456';
$dbname = "mydb";
/*
//创建链接,Mysqli面向对象
$conn = new mysqli($servername,$username,$password);
//检测链接
if($conn->connect_errno)
{
    die("链接失败".$conn->connect_errno);
}
//连接成功后创建数据库
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE){
    echo "数据库创建成功";
}else{
    echo "Error createing database: " .$conn->errno;
}
$conn->close();
*/


//创建链接,Mysqli面向过程
/*
$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("连接失败".mysqli_connect_errno());
}
//创建数据库
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn,$sql))
{
    echo "创建数据库成功";
}else{
    echo "Error createing database: " . mysqli_error($conn);
}
mysqli_close($conn);
*/


//PDO
//
//try{
//    $conn = new PDO("mysql:host=$servername;",$username,$password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//    $sql = "CREATE DATABASE myDBPDO";
//    $conn->exec($sql);
//    echo "PDO创建数据库成功";
//}catch (PDOException $e){
//    echo $sql . "<br>" . $e->getMessage();
//}
//$conn = null;
//


//创建数据表mysqli面向对象
/*
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_errno){
    die("连接失败" . $conn->connect_errno);
}

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if($conn->query($sql) === TRUE){
    echo "Table Myguests created successfully";
}else{
    echo "创建数据表错误" . $conn->error;
}
*/


//创建数据表mysqli面向过程
/*
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("连接数据库失败" . mysqli_connect_errno());
}

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo "数据表MyGuests创建成";
}else{
    echo "创建数据表错误" . mysqli_error($conn);
}
mysqli_close($conn);
*/


//PDO创建数据表

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

    $conn->exec($sql);
    echo "创建MyGuests数据表成功";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

