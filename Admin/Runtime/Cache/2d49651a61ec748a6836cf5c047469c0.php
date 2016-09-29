<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加用户</title>
</head>
<head>
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/style.css" />
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/admin.css" />
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/font-awesome.css" />
	<script type="text/javascript" src="/fos/Public/Js/jquery.js"></script>
	<script type="text/javascript" src="/fos/Public/Js/bootstrap.js"></script>
	<title><?php echo ($title); ?></title>
	 <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
   	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<style>
.w2{
	text-align:center;
}
</style>
<body>
<div class="top">
			<div class="top bcm tca">

	<div class="container">

		<div class="row">

			<div class="col-md-6">

				<span>江苏大学理学院后台管理系统</span>

			</div>
				
			<div class="col-md-1"><a href="__ROOT__/index.php" class="tdn tcw" >网站首页</a></div>

			<div class="col-md-1"><span class=" icon-user"></span> <?php echo ($_SESSION["user_name"]); ?> </div>
			
			<div class="col-md-1"><span class=" icon-off"></span> <a href="__APP__/Login/logout" class="tcw">退出</a></div>

				
		</div>
	</div>

</div>
		</div><!-- end top -->
		
		<div class="container">
			<div class="row mb20">
				<div class="w2 pull-left mt20">
					<div class="navside">
	<ul>
		<li><a href="__APP__/PicManage/index">图片轮播管理</a></li>
	</ul>

 	<ul>
 	<?php if(($_SESSION["user_priority"]) == "0"): ?><li><a href="__APP__/User/index">用户管理</a></li>
 	<?php else: ?>
 		<li><a href="__APP__/User/edit/username/<?php echo ($_SESSION["user_name"]); ?>">用户管理</a></li><?php endif; ?>
	</ul>
	
	 <ul>
		<li><a href="__APP__/Institution/index">科研机构</a></li>
	</ul>
	<ul>
		<li><a href="__APP__/Department/index">系科管理</a></li>
	</ul> 
	
	<ul>
		<li><a href="__APP__/Person/index">教师管理</a></li>
		
		<!-- <?php if(is_array($nav_position)): $i = 0; $__LIST__ = $nav_position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Person/index/position/<?php echo ($vo["position_id"]); ?>"><?php echo ($vo["position_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
	
	</ul>
	<ul>
		<li><a href="__APP__/News/index">新闻管理</a></li>
		
		<!-- <?php if(is_array($nav_category)): $i = 0; $__LIST__ = $nav_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/News/index/category/<?php echo ($vo["category_id"]); ?>"><?php echo ($vo["category_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
	</ul>
	
	<ul>
		<li><a href="__APP__/File/index">文件管理</a></li>
		<!-- <?php if(is_array($nav_filecate)): $i = 0; $__LIST__ = $nav_filecate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/File/index/filecate/<?php echo ($vo["filecate_id"]); ?>"><?php echo ($vo["filecate_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
	</ul>
	
	<ul>
		<li><a href="__APP__/Develop/index/category/1">本科生培养</a></li>
		<li><a href="__APP__/Develop/index/name/7">专业介绍</a></li>
	</ul>
	<ul>
		<li><a href="__APP__/Develop/index/category/2">研究生培养</a></li>
		<li><a href="__APP__/Develop/index/name/3">招生</a></li>
		<li><a href="__APP__/Develop/index/name/4">培养</a></li>
		<li><a href="__APP__/Develop/index/name/5">学位</a></li>
		<li><a href="__APP__/Develop/index/name/6">研究生成果</a></li>

	</ul>
	<ul>
		<li><a href="__APP__/Enedu/index">Teacher Management</a></li>
		<li><a href="__APP__/Endept/index">Teacher Department</a></li>
	</ul>
</div>
				</div>
				<div class="w10 pull-left mt20">
				
						<?php if(($_SESSION["user_priority"]) == "0"): ?><form action=	
							<?php if(($_GET["username"]) == ""): ?>'__APP__/User/doAdd'
								<?php else: ?>'__APP__/User/doEdit/username/<?php echo ($_GET["user_name"]); ?>'<?php endif; ?> 
							 method="post">
							 	<table class="table table-bordered ml20">
								<?php if(($_GET["username"]) == ""): ?><tr>
										<td class="w2">用 户 名：</td><td><input type="text" name="user_name" value='<?php echo ($username); ?>'/></td>
									</tr>
									<?php else: ?>
									<tr>
										<td class="w2">用 户 名：</td>
										<td>
										<input type="text" name="user_name" value='<?php echo ($username); ?>' readonly="readonly"/>
										<!--<span><?php echo ($username); ?></span>-->
										</td>
									</tr><?php endif; ?>

								<?php if(($_GET["username"]) == ""): ?><tr>
									<td class="w2">密　　码：</td><td><input type="password" name="user_password" /></td>
								</tr>
								<tr>
									<td class="w2">确认密码：</td><td><input type="password" name="confirm" /></td>
								</tr>
								<?php else: ?>
									<tr>
									<td class="w2">原 密 码：</td><td><input type="password" name="past_password" /></td>
									</tr>
									
									<tr>
									<td class="w2">新 密 码：</td><td><input type="password" name="user_password" /></td>
									</tr>
									
									<tr>
									<td class="w2">确认密码：</td><td><input type="password" name="confirm" /></td>
									</tr><?php endif; ?>
									<tr>
										<td class="w2">
											验 证 码：
										</td>
										<td>
										<input type="text" name="verify" />
										<img src='__APP__/Public/verify' style="display:inline-block;width:60px;" onclick='this.src=this.src+"?"+Math.random()'/>
										</td>
									</tr>
									<tr>
										<td>
										<input type="submit" class="btn bcm center-block tcw" value="修改" />
										</td>
										<td>
										<input type="reset" class="btn bcm tcw" value="重置">
										</td>
									</tr>
								</table>
								</form>
								
								<?php else: ?>
									<form action=	"__APP__/User/doChange" method="post">
									<table class="table table-bordered ml20">
										<tr>
										<td class="w2">用户名：</td><td><input type="text" name = "user_name" value="<?php echo ($username); ?>" readonly="true"/></td>
										</tr>
										<tr>
										<td class="w2">原密码：</td><td><input type="password" name="past_password" /></td>
										</tr>
										<tr>
										<td class="w2">新密码：</td><td><input type="password" name="user_password" /></td>
										</tr>
										<tr>
										<td class="w2">确认密码：</td><td><input type="password" name="confirm" /></td>
										</tr>
										<tr>
										<td class="w2">验证码：</td><td><input type="text" name="verify" />
											<img src='__APP__/Public/verify' style="display:inline-block;width:60px;" onclick='this.src=this.src+"?"+Math.random()'/>
										</td>
										</tr>
										<tr>
										<td class="w2">
										<input type="submit" class="btn bcm center-block tcw" value="添加" />
										</td>
										<td>
										<input type="reset" class="btn bcm tcw" value="重置">
										</td>
										</tr>
									</table>	
									</form><?php endif; ?>
				</div><!-- end class="w10" -->
			</div><!-- class="row" -->
		</div>
</body>
</html>