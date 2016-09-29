<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>


<html>
	<head>
		<title>Faculties</title>
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
			a{
				color:#666;
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
				<div id="content" style="padding:5px 10px;">
					
					<?php $__FOR_START_30107__=1;$__FOR_END_30107__=8;for($i=$__FOR_START_30107__;$i < $__FOR_END_30107__;$i+=1){ ?><div style="text-align:center;font-size:20px;"><?php echo ($department["$i"]); ?></div>
							<table class="table table-bordered">
							<?php $__FOR_START_32056__=0;$__FOR_END_32056__=$list["{$i}"]["count"];for($j=$__FOR_START_32056__;$j < $__FOR_END_32056__;$j+=1){ if(($j%5) == "0"): ?><tr><?php endif; ?>
								<td style="display:inblock;width:20%;"><a href="__APP__/En/teacher/id/<?php echo ($list["$i"]["$j"]["id"]); ?>"><?php echo ($list["$i"]["$j"]["name"]); ?></a></td>
								<?php if(($j%5) == "4"): ?></tr><?php endif; } ?>
							<?php if($list.$i|count % 5 == 0): ?></tr><?php endif; ?>
							</table><?php } ?>
					
				</div>
				
				
				<!-- Content Area Ends Here -->

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