<!DOCTYPE html> 
<html> 
<body> 

	<div style="color:red">
        <?php 
		echo "Hello World!<br>"; 

		function printName(){

			print "zhengwei";
		}
		printName();
		//测试github
		?> 
	</div>
	<div>欢迎<?php echo $_POST["fname"]; ?>!<br>
		你的年龄是 <?php echo $_POST["age"]; ?>  岁。
	</div>

</body> 
</html>