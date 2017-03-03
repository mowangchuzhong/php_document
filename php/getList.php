<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/12/29 0029
 * Time: 23:57
 */
header('content-type:text/html;charset="utf-8"');
error_reporting(0);
$arr1=array('leo','mono','zhangsan');
//数组类型
$arr2=array('username'=>'leo','age'=>32);
//key-value类型---json类型
//echo  json_encode($arr1);
echo  json_encode($arr2);