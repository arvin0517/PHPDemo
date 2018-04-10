<?php
header("Content-type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset($conn, "utf8");
// mysql_query("set character set 'utf8'");//读库   
// mysql_query("set names 'utf8'");//写库 
// 检查链接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
// $sql = "INSERT INTO student (name, address, sex)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql = "INSERT INTO stu (stuname, address)
VALUES ('多福多寿', '阿斯蒂芬');";



// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>