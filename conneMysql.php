<?php  

 //    $servername = "localhost:3306";
	// $username = "root";
	// $password = "";
	// $testdatabase = "test";

	//    //��������
	// $conn = new mysqli($servername,$username,$password,$testdatabase);
	//    // �������
	// if ($conn->connect_error) {
	// 	die("����ʧ��: " . $conn->connect_error);
	// } 
	// echo "���ӳɹ�<br>";

	// 	// ʹ�� sql �������ݱ�
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
	//     echo "�������ݱ����: " . $conn->error;
	// }

	// $conn->close();
	
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$testdatabase = "test";
    
    //��������
	$conn  = new mysqli($servername,$username,$password,$testdatabase);

     if($conn->connect_error){

     	die("����ʧ��". $conn->connect_error);
     }
     echo "���ӳɹ�<br>";
     

     // //Ԥ����
     // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"); //sql���Ҫ��д
     // $stmt->bind_param("sss", $firstname, $lastname, $email);

     // //���ò���
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

     // echo "�������ݳɹ�<br>";
     // ��ȡ����
     $sql  = "SELECT * FROM myguests";
     $result  = $conn->query($sql);
     if($result->num_rows > 0){

     	//�������
     	while($row = $result->fetch_assoc()) {
     		echo "id:" . $row['id'] ." - firstname:". $row['firstname'] ."<br>" ;
     	}
     }

     //$stmt->close();
     $conn->close();
    

?>

