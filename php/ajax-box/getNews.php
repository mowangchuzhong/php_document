<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/12/30 0030
 * Time: 0:54
 */
header('content-type:text/php;charset="utf-8"');

error_reporting(0);
$news=array(
    array('title'=>'深改:架梁夯制度 改革进施工高峰期 深改','date'=>'2016-12-30'),
    array('title'=>'涉雷洋案派出所副所长被双开 所长被免职','date'=>'2016-12-29'),
    array('title'=>'高中生晚自习吊死楼道 现场现带血卫生纸','date'=>'2016-12-21'),
);
 echo json_encode($news);
//echo $news;
//返回值是json数组[{},{}]
