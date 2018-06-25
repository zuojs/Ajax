<?php 
	header("Content-Type:text/html; charset=utf-8");
	$callback = $_GET['_jsonp'];
	$arr = array("左劲松","动漫","帅","汪萍","吃","漂亮");
	echo $callback."(".json_encode($arr).")";//字符串拼接
?>