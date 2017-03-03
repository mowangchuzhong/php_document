<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);
// $username=$_GET["username"];
// $age=$_GET["age"];
$username=$_POST["username"];
$age=$_POST["age"];
echo "用户名：{$username}, 年龄：{$age}";
// 得到的东西就是ajax得到的数据。