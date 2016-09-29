<?php if (!defined('THINK_PATH')) exit();?>	<!doctype html>
	<html>
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
	<body>
	<div class="bgm"><div class="top bcm tca">

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

</div></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-2 mt20"><div class="navside">
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
</div></div>
			<div class="col-xs-10 mt20">
			
				<block name="main">
					
<form action=
<?php if($_GET["id"] == null): ?>'__APP__/Department/doAdd'
<?php else: ?>'__APP__/Department/doEdit/id/<?php echo ($_GET["id"]); ?>'<?php endif; ?> 
method='post'>
<div>
	<div class="text-center">添加部门</div>
	<hr />
	<div class="text-center">题目：<input type='text' name='name' <?php if($_GET["id"] != null): ?>value='<?php echo ($Department['department_name']); ?>'<?php endif; ?>/></div>
	<hr />
	<div>
	<div class="text-center">内容</div>
		<script id="editor" type="text/plain" style="width:624px;height:500px;margin:0 auto;"><?php if($_GET["id"] != null): echo ($Department['department_content']); endif; ?></script>
		</div>
		<div class="w9 center-block mt20 mb20"><input type='submit' class="btn bcm tcw w3" value='提交' />
		<input type="hidden" name="content" />	</div>
	</div>
</form>
<script type='text/javascript'>
	var ue = UE.getEditor('editor');
	var con= document.getElementByName('content');
	con.innerHTML=ue.getContent;
</script>
				</block>

			<script type='text/javascript'>
				var ue = UE.getEditor('editor');
				var con= document.getElementByName('content');
				con.innerHTML=ue.getContent;
			</script>
			</div>
		</div><!-- end class="row" -->
	</div>
	</html>