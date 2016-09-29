<?php
	//1.定义前台项目名Home
	define("APP_NAME","Home");
	//2.定义前台项目目录
	define("APP_PATH","./Home/");
	//3.开启页面缓存
	define('NOT_WRITE_CACHE',FALSE);

	//3.关闭页面缓存
	//define('NOT_WRITE_CACHE',TRUE);

	define("APP_DEBUG",TRUE);
	//定义前台图片轮播地址
	define("IMAGES_URL","./Public/Images/");
	//4.加载框架入口文件
	require './ThinkPHP/ThinkPHP.php';
?>