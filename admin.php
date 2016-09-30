<?php
	//1.定义前台项目名Admin
	define("APP_NAME","Admin");
	//2.定义前台项目目录
	define("APP_PATH","./Admin/");
	//3.开启页面缓存
	//define('NOT_WRITE_CACHE',FALSE);

	//3.关闭页面缓存
	define('NOT_WRITE_CACHE',TRUE);

	//3.开启页面调试
	define("APP_DEBUG",true);
	//4.加载框架入口文件
	require './ThinkPHP/ThinkPHP.php';
?>