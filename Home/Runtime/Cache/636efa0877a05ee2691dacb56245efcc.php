<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>department</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="__PUBLIC__/Css/5grid/core.css" />
		<link rel="stylesheet" href="__PUBLIC__/Css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="__PUBLIC__/Css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="__PUBLIC__/Css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="__PUBLIC__/Css/enStyle.css" />
		<link rel="stylesheet" href="__PUBLIC__/Css/enstyle-desktop.css" />
		<script src="__PUBLIC__/Js/5grid/jquery.js"></script>
		<script src="__PUBLIC__/Js/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	<style>
	.content_en img{
		display:block;
		max-width:90%;
		height:auto;
		margin:0 auto;
	}
	</style>
	</head>
	<body class="no-sidebar">
		<!-- Header -->
		<div id="header-wrapper">
		
					<header id="header">
		<div class="5grid-layout">
			<div class="row">
				<div class="5u enBanner">
					<span class="span1">JIANGSU　UNIVERSARY</span>
					<span class="span2">Faculty of Science</span>
				</div>

				<div class="7u enNav">
					<nav>
						<ul class="Nav">
							<li><a href="__APP__/En/index">Home</a></li>
							<li><a href="__APP__/En/Department">Department</a></li>
							<li><a href="__APP__/En/Faculties">Faculties</a>
								<ul>
									<li><a href="__APP__/En/ds">Doctoral</a></li>
									<li><a href="__APP__/En/sp">Supervisor</a></li>
								</ul>
							</li>
							<li><a href="http://fos.ujs.edu.cn/cca/">International</a></li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</header>

			
		</div>
		<!-- Page Wrapper -->
		<div id="wrapper" class="5grid-layout">

			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="content" class="12u" style="margin:0;">
						
						<!-- Main Content Area -->
						<section style="margin:0;">
							<h2 style="text-align:center;font-size:24px;"><?php echo ($vo["department_name_en"]); ?></h2>
							<div class="content_en">
							<?php echo ($vo["department_content_en"]); ?>
							</div>
						</section>
		
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- Page Content -->
		</div>
		<!-- Wrapper Ends Here -->


	
		<!-- Copyright -->
		<div class="5grid-layout" id="copyright">
			<div class="row">
	<div class="12u">
		<p>&copy; JiangSu University Copyright ©2010-2016 <a href="__APP__/Index/index">Chinese</a> | All rights reserved</p>
	</div>
</div>

		</div>
		
</body>
</html>