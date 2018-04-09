<?php  

 //    $servername = "localhost:3306";
	// $username = "root";
	// $password = "";
	// $testdatabase = "test";

	//    //创建连接
	// $conn = new mysqli($servername,$username,$password,$testdatabase);
	//    // 检测连接
	// if ($conn->connect_error) {
	// 	die("连接失败: " . $conn->connect_error);
	// } 
	// echo "连接成功<br>";

	// 	// 使用 sql 创建数据表
	// $sql = "CREATE TABLE MyGuests (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	// firstname VARCHAR(30) NOT NULL,
	// lastname VARCHAR(30) NOT NULL,
	// email VARCHAR(50),
	// reg_date TIMESTAMP
	// )";
    
 //    if ($conn->query($sql) === TRUE) {
 //    echo "Table MyGuests created successfully";
	// } else {
	//     echo "创建数据表错误: " . $conn->error;
	// }

	// $conn->close();
	
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$testdatabase = "test";
    
    //创建连接
	$conn  = new mysqli($servername,$username,$password,$testdatabase);

     if($conn->connect_error){

     	die("连接失败". $conn->connect_error);
     }
     echo "连接成功<br>";
     

     // //预处理
     // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"); //sql语句要大写
     // $stmt->bind_param("sss", $firstname, $lastname, $email);

     // //设置参数
     // $firstname = "arvin";
     // $lastname = "zheng";
     // $email = "jiedon.com";
     // $stmt->execute();

     // $firstname = "jone";
     // $lastname = "xu";
     // $email = "jiedon.com";
     // $stmt->execute();

     // $firstname = "jin";
     // $lastname = "cai";
     // $email = "jiedon.com";
     // $stmt->execute();

     // echo "插入数据成功<br>";
     // 读取数据
     $sql  = "SELECT * FROM myguests";
     $result  = $conn->query($sql);
     if($result->num_rows > 0){

     	//输出数据
     	while($row = $result->fetch_assoc()) {
     		echo "id:" . $row['id'] ." - firstname:". $row['firstname'] ."<br>" ;
     	}
     }

     //$stmt->close();
     $conn->close();
    

?>

