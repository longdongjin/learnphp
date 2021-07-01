<?php
$servername = 'localhost';
$username = "root";
$password = "123456";
$dbname = "mydb";
$dbname1 = "mydbpdo";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_errno){
    die('连接失败' . $conn->connect_errno);
}

$sql = "INSERT INTO MyGuests (firstname,lastname,email)VALUES ('John','Doe','john@example.com')";
if($conn->query($sql) === TRUE){
    echo "新纪录插入成功";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}
$conn->close();