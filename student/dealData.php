<?php 

   $name = isset($_POST['name'])? htmlspecialchars($_POST['name']):'';
   $address = isset($_POST['address'])? htmlspecialchars($_POST['address']):'';
   $sex = isset($_POST['sex'])? htmlspecialchars($_POST['sex']):'';
  
   $servername = "localhost:3306";
   $user = "root";
   $password = "123456";
   $dbname = "testphp";

   //创建连接
   $conn = mysqli_connect( $servername ,$user, $password, $dbname);
   mysqli_set_charset($conn, "utf8");
   if(!$conn){

   	die('连接失败：' . mysqli_connect_error());
   }
   // echo "name: $name";
   // echo "address: $address";
   // echo "sex: $sex \n";
   $sql = "INSERT INTO STUDENT (NAME, ADDRESS,SEX) VALUES ('" .$name. "', '" .$address. "', '" .$sex. "')";
   //echo "$sql";
   if(mysqli_query($conn, $sql)){

   	  echo "插入数据成功";
   	 //alert("插入数据成功");
   }

   mysqli_close($conn);
 ?>