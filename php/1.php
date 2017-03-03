<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/12/29 0029
 * Time: 21:26
 */
header('content-type:text/html;charset="utf-8"');
error_reporting(0);
/*get方式就收数据*/
/*$username=$_GET['username'];
$password=$_GET['password'];*/
/*post方式接收数据*/
/*
$username=$_POST['username'];
$password=$_POST['password'];
*/
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
echo "用户名：{$username},密码：{$password}";