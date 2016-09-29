<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

		<Meta http-equiv="Widow-target" Content="_self">

	
 	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/style.css" />	
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/font-awesome.css" />
	<script type="text/javascript" src="/fos/Public/Js/jquery.js"></script>
	<script type="text/javascript" src="/fos/Public/Js/bootstrap.js"></script>
	<script type="text/javascript" src="/fos/Public/Js/slider.js"></script>
	<title></title>
	 <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
   	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>


	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/index.css" />

	<style>

	.picutre_many img{width:200px; height:150px;}

	#pic td img{

	border:2px solid #eee;

}

</style>

		<title>用户登录</title>

	</head>

<!--	<body style="background:url('__PUBLIC__/Images/loginbg.jpg');background-repeat: no-repeat; width:100%;background-size:100%">-->
	<body style=" background-color:#007D9D;background-size:100%">
		<div class="container">

			<form action='__URL__/doLogin' method='post'>

			<div class="w9 center-block" style="height:400px;margin-top:200px;">

				<div class="w4 center-block "><input type='text' class="form-control" name='user_name' placeholder="用户名" /></div>

				<div class="w4 center-block mt10"><input type='password' class="form-control" name='user_password' placeholder="密码" /></div>

				<div class="w4 center-block mt10">

					<span class="w7" style="display:inline-block"><input type='text' class="form-control" name='verify' placeholder="验证码" style="display:inline-block" /></span>

					<span class="w4" style="display:inline-block;margin-left:10px;"><img src='__APP__/Public/verify' class="w10 ml10" style="display:inline-block;*margin-left:20px; _margin-left:20px; margin-top:0px;*margin-top:-13px;_margin-top:-13px;vertical-align:middle;" onclick='this.src=this.src+"?"+Math.random()'/></span>

				</div>

				<div class="w4 center-block mt10">

					<input type='submit' class="btn bcw w4 tcm" value='登录' />

					<input type='reset' class="btn bcw w4 tcm" style="margin-left:80px;" value='重置' />

				</div>

			</div>

			</form>

		</div>

	</body>

</html>