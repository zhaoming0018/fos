<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>


<html>
	<head>
		<title>teacher</title>
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
	</head>
	<body class="no-sidebar">
		<!-- Header -->
		<div id="header-wrapper">
		
			<header id="header">
				<div class="5grid-layout">
					<div class="row">
						<div class="5u" id="logo">
							<h1><a href="#" class="mobileUI-site-name">JIANGSU　UNIVERSARY</a></h1>
							<p>Faculty of Science</p>
						</div>
						<div class="7u" id="menu">
							<nav class="mobileUI-site-nav">
								<ul>
									<li class="current_page_item"><a href="__APP__/En/index">Home</a></li>
									<li class="current_page_item"><a href="__APP__/En/Department">Department</a></li>
									<li class="current_page_item"><a href="__APP__/En/Faculties">Faculties</a></li>
									<li class="current_page_item"><a href="http://fos.ujs.edu.cn/cca/">International</a></li>
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
				<div id="content" class="12u">
					
					<table data-sort="sortDisabled" class="table table-bordered">
				    <tbody>
				        <tr class="firstRow">
				            <td width="260" valign="top" rowspan="5" colspan="1"><img src="__PUBLIC__/upload/file/foreign/<?php echo ($list["foreign_photo"]); ?>" style="width:200px;height:auto;display:block;margin:10px auto;"/></td>
				            <td valign="top" rowspan="1" colspan="2">name:<?php echo ($list["foreign_name"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="2">title:<?php echo ($list["foreign_title"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="2">add:<?php echo ($list["foreign_add"]); ?></td>
				        </tr>
				        <tr>
				            <td width="260" valign="top">mobile:<?php echo ($list["foreign_mobile"]); ?></td>
				            <td width="260" valign="top">email:<?php echo ($list["foreign_email"]); ?></td>
				        </tr>
				        <tr>
				            <td width="260" valign="top">fax:<?php echo ($list["foreign_fax"]); ?></td>
				            <td width="260" valign="top">homepage:<?php echo ($list["foreign_Homepage"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">research fileds orientations：<br /><?php echo ($list["foreign_RFO"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">education：<br /> <?php echo ($list["foreign_education"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" style="word-break: break-all;" rowspan="1" colspan="3">courses offered：<br /> <?php echo ($list["foreign_CO"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" style="word-break: break-all;" rowspan="1" colspan="3">publications：<br /> <?php echo ($list["foreign_publication"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">research projects in progress：<br /> <?php echo ($list["foreign_RPIP"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">honors & awards ：<br /><?php echo ($list["foreign_HA"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">professional affiliations：<br /> <?php echo ($list["foreign_PA"]); ?></td>
				        </tr>
				        <tr>
				            <td valign="top" rowspan="1" colspan="3">major academic activities ：<br /><?php echo ($list["foreign_MAA"]); ?></td>
				        </tr>
				    </tbody>
				</table>

			<!-- 教师详情 -->		
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
					<p>&copy; JiangSu University Copyright ©2010-2015 <a href="__APP__/Index/index">Chinese</a> | All rights reserved</p>
				</div>
			</div>
		</div>
		
</body>
</html>