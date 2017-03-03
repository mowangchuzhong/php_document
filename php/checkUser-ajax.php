<?php
	header('content-type:text/php;charset="utf-8"');
	
	
	//判断信息是否正确
	$username=$_GET['username'];
	if($username=="jiangzemin"){
		echo "1";//不可注册
	}
	else{
		echo("1");//可以进行注册
	}
?>