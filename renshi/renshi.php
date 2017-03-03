<?php 
// <?php:服务器端标记
// 如：JavaScript放在<script>中。
//静态：没有后台
//动态：有后台
//代码会被服务器执行将"结果"输出
$abc=12;//定义变量必须以$开头
echo abc;//把abc当字符串输出。
echo $abc;
// "."代表字符串的连接。
// 定义函数
	/*function show($str){
		echo "$str";
	}
	show("abc")*/
// --------------------------
//MVC概念:把前端、后端、数据库拆开
//Model :(模型 数据)
//View 视图 前端标签(html+css+js)
//Controlers  控制器   逻辑性的代码。
//表现和代码分离。
//smarty框架---后台框架
// $_COOKIE:获取、删除cookie
// $_ENV:提取环境变量：操作系统，帮助某些软件运行程序。
// $_FILES:所有上传的文件都保存在该变量中
// $_REQUEST:可以获取$_GET和$_POST两种请求方式。
// $_SERVER:服务器端的一些文档路径
// $_SESSION:会话。
// 20min,用户没有进行连接，服务器就会将其关闭。
// 浏览器与服务器建立连接
?>