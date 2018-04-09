<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
 
if(empty($q)) {
    echo '请选择一个网站';
    exit;
}
 
$con = mysqli_connect('localhost','root','');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
// 选择数据库
mysqli_select_db($con,"test");
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");
 
$sql="SELECT * FROM myguests WHERE id = '".$q."'";  //表如果在数据库中不存在，则会报错
 
$result = mysqli_query($con,$sql);
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>网站名</th>
<th>网站 URL</th>
<th>Alexa 排名</th>
<th>国家</th>
</tr>";
if (mysqli_num_rows($result) > 0) {
    // 输出数据
	while($row = mysqli_fetch_array($result))
	{
	    echo "<tr>";
	    echo "<td>" . $row['id'] . "</td>";
	    echo "<td>" . $row['name'] . "</td>";
	    echo "<td>" . $row['url'] . "</td>";
	    echo "<td>" . $row['alexa'] . "</td>";
	    echo "<td>" . $row['country'] . "</td>";
	    echo "</tr>";
	}
	
} else {
	 echo "<tr>";
    echo "结果";
      echo "</tr>";
}
 echo "</table>";
// if(mysqli_num_rows($result)){

// 	while($row = mysqli_fetch_array($result))
// 	{
// 	    echo "<tr>";
// 	    echo "<td>" . $row['id'] . "</td>";
// 	    echo "<td>" . $row['name'] . "</td>";
// 	    echo "<td>" . $row['url'] . "</td>";
// 	    echo "<td>" . $row['alexa'] . "</td>";
// 	    echo "<td>" . $row['country'] . "</td>";
// 	    echo "</tr>";
// 	}
// 	echo "</table>";
// }

 
mysqli_close($con);
?>