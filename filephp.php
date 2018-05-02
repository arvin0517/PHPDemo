<?php 
        header("content-type:text/html;charset=utf-8");    
		if ($_FILES["file"]["error"] > 0)
		{
		    echo "错误：" . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
		    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"]."<br>";

		        // 判断当期目录下的 upload 目录是否存在该文件
		        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		        if (file_exists("upload/" . $_FILES["file"]["name"]))
		        {
		            echo $_FILES["file"]["name"] . " 文件已经存在.<br>";
		        }
		        else
		        {
		            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
		            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
		            echo "文件存储在: " . "upload/" . $_FILES["file"]["name"]."<br>";
		        }


		}


      $temparray = explode(".", $_FILES["file"]["name"]);
      $str  = end($temparray);
      $text = "";
      echo "文件后缀str:".$str."<br>";
      if($str == "txt"){
        echo "文件内容：<br>";
        $myfile = fopen("upload/" . $_FILES["file"]["name"], "r") or die("Unable to open file!");
		// 输出单字符直到 end-of-file
		while(!feof($myfile)) {
		  //echo fgets($myfile)."<br>";
		  $text .= fgets($myfile)."<br>";
		}
		fclose($myfile);     	
      }


        //读取文件的内容
        // $fname = "upload/" . $_FILES["file"]["name"];
        // $contents = file_get_contents($fname);
        // $encoding = mb_detect_encoding($contents, array('GB2312','GBK','UTF-16','UCS-2','UTF-8','BIG5','ASCII'));
        // echo $contents;
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script type="text/javascript">
			window.onload = function(){
			var haha = document.getElementById("text");
			var btn  = document.getElementById("img");
			btn.onclick = function(){
				
				haha.innerHTML = "二次数据";
			
			}		
			}

		</script>
	</head>
	<body>
        <textarea id="text"></textarea>
        <img id="img" src=""/>
        <input type="button" id="btn" value="修改" />
	</body>
</html>
