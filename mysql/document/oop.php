<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<script>
</script>
<?php
class Person
{
	function __construct($name, $sex)
	{
		$this->name=$name;
		$this->sex=$sex;
	}
	
	function showName()
	{
		echo $this->name;
	}
	
	function showSex()
	{
		echo $this->sex;
	}
}

class Worker extends Person
{
	function __construct($name, $sex, $job)
	{
		parent::__construct($name, $sex);
		
		$this->job=$job;
	}
	
	function showJob()
	{
		echo $this->job;
	}
}

/*$p=new Person('blue', '男');

$p->showSex();*/

$w=new Worker('blue', '男', '讲师');

$w->showJob();
?>
</body>
</html>