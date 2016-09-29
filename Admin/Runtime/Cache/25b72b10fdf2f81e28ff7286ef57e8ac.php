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
<?php if($_GET["id"] == null): ?>'__APP__/Enedu/doAdd'
<?php else: ?>'__APP__/Enedu/doEdit/id/<?php echo ($_GET["id"]); ?>'<?php endif; ?>  
method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
	<tr><td>Name: </td><td><input type="text" name="foreign_name" /></td></tr>
	<tr><td>Department:</td><td><select name="foreign_department">
			<?php if(is_array($department)): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["department_id"]); ?>'><?php echo ($vo["department_name_en"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
		  </select></td></tr>
	<tr><td>Title:</td><td><input type="text" name="foreign_title" /></td></tr>
	<tr><td>Photo：</td><td><input type="file" name="foreign_photo" /></td></tr>
	<tr><td>Add: </td><td><input type="text" name="foreign_add" /></td></tr>
	<tr><td>Mobile:</td><td><input type="text" name="foreign_mobile"/></td></tr>
	<tr><td>E-mail: </td><td><input type="text" name="foreign_email" /></td></tr>
	<tr><td>Fax: </td><td><input type="text" name="foreign_fax"></td></tr>
	<tr><td>Homepage: </td><td><input type="text" name="foreign_Homepage"/></td></tr>
	<tr><td>Research Fields & Orientations: </td><td><textarea name="foreign_RFO" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Education: </td><td><textarea name="foreign_education" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Course Offer：</td><td><textarea name="foreign_CO" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Publication：</td><td><textarea name="foreign_publication" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Research Project in Progress：</td><td><textarea name="foreign_RPIP" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Honor & Award：</td><td><textarea name="foreign_HA" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td>Professional Affillations：</td><td><textarea name="foreign_PA" id="" cols="80" rows="10"></textarea></td></tr>
	<tr><td>Major Academic Activities：</td><td><textarea name="foreign_MAA" id="" cols="80" rows="5"></textarea></td></tr>
	<tr><td><button id="submitForm" class="w9 btn bcm tcw">提交</button></td><td><input type="reset" class="w3 btn bcm tcw" value="重置" /></td></tr>		
	</table>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(is_array($foreign)): $i = 0; $__LIST__ = $foreign;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if($("[name='<?php echo ($key); ?>']").length!=0&&"<?php echo ($key); ?>"!="foreign_photo"){
			 	$("[name='<?php echo ($key); ?>']")[0].value="<?php echo ($vo); ?>";
			 }<?php endforeach; endif; else: echo "" ;endif; ?>
	});
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