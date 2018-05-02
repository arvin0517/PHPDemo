<?php 

// 从 URL 中获取参数 q 的值
$q=$_GET["q"];

 $req = $q."xiugai";
$testarray = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 //echo $req;
exit(json_encode($testarray));
 ?>