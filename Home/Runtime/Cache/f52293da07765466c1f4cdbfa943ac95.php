<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

 	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/style.css" />	
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/font-awesome.css" />
	<script type="text/javascript" src="/fos/Public/Js/jquery.js"></script>
	<script type="text/javascript" src="/fos/Public/Js/bootstrap.js"></script>
	<script type="text/javascript" src="/fos/Public/Js/slider.js"></script>
	 <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
   	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
	
<style>
	table tr td{
	text-align:center;
	}.tableLab{	border:1px solid #333;}.tableLab tr{	border:1px solid #333;}.tableLab tr td{	border:1px solid #333;}
</style>
<title>人才招聘</title>
</head>
<body>
<div class="top">
	
<div class="topLine bcm">
	<div class="container">
		<div class="row">
			<div class="w1 pull-left"><a href="http://www.ujs.edu.cn/site1/" target="_blank">学校首页</a></div>
			<div class="w1 pull-left"><a href="http://fos.ujs.edu.cn/newfos/news/meetinginfo.php" target="_blank">学院会议</a></div>
			<div class="w6 pull-left"><a href="mailto:lxydw@ujs.edu.cn" title="lxydw@ujs.edu.cn">理学院信箱</a></div>
			<div class="w1 pull-left"><a href="__APP__/Index/rczp">人才招聘</a></div>
			<div class="w1 pull-left"><a href="__ROOT__/admin.php">网站管理</a></div>
			<div class="w2 pull-left"><a href="__APP__/En/index" target="_blank">English Version</a></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- end class="topLine" -->
<div class="topBanner container">
	<div class="row">
		<!-- 
		<div class="col-lg-1">
			<img src="__PUBLIC__/Images/xiaohui.png" class="imgXH"/>
		</div>
		<div class="col-lg-2 mt20">
			<img src="__PUBLIC__/Images/ujsname.gif" class="imgUN"/>
		</div>
		<div class="col-lg-2">
			<img src="__PUBLIC__/Images/lxy.png" class="imgLXY"/>
		</div>
		 -->
		 <div class="w6 pull-left">
			<img src="__PUBLIC__/Images/lxybanner.png" class="imgLXY"/>
		</div>
		<div class="w3 pull-left" style="margin-left:200px;">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
				style="margin:0;padding:0"
				codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
				width="300" height="100" id="xiaoxun" align="">
				<param name=movie value="__PUBLIC__/Images/xiaoxun.swf"><param name=quality value=high><param name=wmode value=transparent>
				<embed src="__PUBLIC__/Images/xiaoxun.swf" quality=high wmode=transparent width="300" height="100" name="xiaoxun" align=""
				type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
				</embed>
			</object>
		</div>
		<div class="clearfix"></div>
	</div>
</div><!-- end class="topBanner" -->
<div class="nav container bcm">
	<ul>
		<li><a href="__APP__/Index/index">学院主页</a></li>
		<li><a href="__APP__/Index/primary">学院概况</a>
			<ul>
				<li><a href="__APP__/Index/primary">学院简介</a></li>
				<li><a href="__APP__/Department/index">系科简介</a></li>
				<li><a href="__APP__/Index/leader">学院领导</a></li>
				<li><a href="__APP__/Index/organization">机构设置</a></li>
				<li><a href="__APP__/Index/saying">学院院训</a></li>
				<li><a href="__APP__/Index/bigevent">大事记</a></li>	
			</ul>
		</li>
		<li><a href="__APP__/Teacher/index">师资队伍</a>
			<ul>
				<li><a href="__APP__/Teacher/wpzj">外聘专家</a></li>
				<li><a href="__APP__/Teacher/cate/id/2">博导风采</a></li>
				<li><a href="__APP__/Teacher/cate/id/3">硕导风采</a></li>
				<li><a href="__APP__/Teacher/cate/id/4">教授风采</a></li>
				<li><a href="__APP__/Teacher/index">教师风采</a></li>
				<li><a href="__APP__/Teacher/glrc">各类人才</a></li>
				<li><a href="__APP__/Index/rczp">招聘计划</a></li>
			</ul>
		</li>
		<li><a href="__APP__/Index/xkjs">学科建设</a>
			<ul>
				<li><a href="__APP__/Index/xkjs">博士后流动站</a></li>
				<li><a href="__APP__/Index/bsd">博士点</a></li>
				<li><a href="__APP__/Ssd/ssd">硕士点</a></li>
			</ul>
		</li>
		<li><a href="__APP__/Develop/index/category/1">学生培养</a>
			<ul>
				<li><a href="__APP__/Develop/index/category/1">本科生培养</a></li>
				<li><a href="__APP__/Develop/index/category/2">研究生培养</a></li>
				<li><a href="__APP__/Teacher/top">最受学生欢迎的十佳教师</a></li>
			</ul>
		</li>
		<li><a href="__APP__/Kyjg/kyjg">科学研究</a>
			<ul>
				<li><a href="__APP__/Kyjg/kyjg">科研机构</a></li>
				<li><a href="__APP__/Index/kyxm">科研项目</a></li>
				<li><a href="__APP__/Index/kycg">科研成果</a></li>
			</ul>
		</li>
		<li><a href="__APP__/Index/dqgz">党群工作</a>
			<ul>
				<li><a href="__APP__/Dqgz/zzjs">组织建设</a></li>
				<li><a href="__APP__/Dqgz/xydw">学院党委</a></li>
				<li><a href="__APP__/Dqgz/xytw">学院团委</a></li>
				<li><a href="__APP__/Dqgz/xygh">学院工会</a></li>
				<!-- <li><a href="__APP__/Dqgz/cxzy">创先争优</a></li>
				<li><a href="__APP__/Dqgz/djdtj">党建带团建</a></li> -->
			</ul>
		</li>
		<li><a href="__APP__/Xsgz/xgxx">学生工作</a>
			<ul>
				<li><a href="__APP__/Xsgz/xgxx">学工信息</a></li><!-- 数据库读出 -->
				<li><a href="__APP__/Xsgz/gzzd">规章制度</a></li><!-- 数据库读出 -->
				<li><a href="__APP__/Xsgz/zzjg">组织机构</a></li><!-- 数据库读出 -->
				<li><a href="__APP__/Xsgz/xlg">心灵港</a></li><!-- 数据库读出 -->
				<li><a href="__APP__/Xsgz/yggw">院关工委</a></li><!-- 数据库读出 -->
				<li><a href="__APP__/Xsgz/xsfc">学生风采</a></li><!-- 数据库读出 -->
			</ul>
		</li>
		<li><a href="__APP__/Index/dwjl">对外交流</a>
			<ul>
				<li><a href="__APP__/Index/dwjl">对外交流综述</a></li>
				<li><a href="__APP__/Index/gjhy">国际会议</a></li>
				<li><a href="__APP__/Index/gnhy">国内会议</a></li>
				<li><a href="http://www.arcadia-china.com/" title="阿卡迪亚·中国项目">阿卡迪亚</a></li>
				<li><a href="http://foreign.ujs.edu.cn/about/hzbx/index.html" target="_blank" title="中外合作办学专栏">合作办学</a></li>
			</ul>
		</li>
		<li><a href="__APP__/File/index">下载中心</a>
			<ul>
				<li><a href="__APP__/File/index/id/1">党建工作</a></li>
				<li><a href="__APP__/File/index/id/2">研究生教育</a></li>
				<li><a href="__APP__/File/index/id/3">本科生教育</a></li>
				<li><a href="__APP__/File/index/id/4">学生工作</a></li>
				<li><a href="__APP__/File/index/id/5">其他</a></li>
			</ul>
		</li>
	</ul>
</div><!-- end class="nav" -->
	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/index.css" />
</div><!-- end top -->

<div class="container">
	<div class="row mt20">
		<div class="w2 pull-left">
			<div class="navside">
				<div class="navList mb20">
					<div class="navTitle">师资队伍</div><!-- 数据库读出数据 -->
					<ul>
						<li><a href="__APP__/Teacher/wpzj">外聘专家</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Teacher/cate/id/2">博导风采</a></li>
						<li><a href="__APP__/Teacher/cate/id/3">硕导风采</a></li>
						<li><a href="__APP__/Teacher/cate/id/4">教授风采</a></li>
						<li><a href="__APP__/Teacher/index">教师风采</a></li>
						<li><a href="__APP__/Teacher/glrc">各类人才</a></li>
						<li><a href="__APP__/Index/rczp">招聘计划</a></li>
					</ul>
				</div><!-- end class="navList" -->
			</div><!-- end navside -->
		</div>
		
		<div class="w10 pull-left">
			<div class="article">
				<div class="articleTitle">
					<div>人才招聘</div>
					<hr/>
				</div>
				<div class="articleBody w9 center-block">
					<h5 class="text-center">2016年理学院人才招聘计划</h5><table style="width: 690px;" width="900" cellpadding="0" cellspacing="0" class="tableLab">    <colgroup>        <col style=";width:53px" width="53"/>        <col style=";width:75px" width="90"/>        <col style=";width:91px" width="91"/>        <col style=";width:47px" width="46"/>        <col style=";width:207px" width="206"/>        <col style=";width:67px" width="66"/>        <col style=";width:69px" width="69"/>        <col style=";width:195px" width="195"/>    </colgroup>    <tbody>        <tr class="firstRow" style=";height:45px" height="45">            <td colspan="8" style="" height="45" width="803">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">2016年江苏大学理学院人才招聘信息</span>            </td>        </tr>        <tr style=";height:46px" height="46">            <td style="border-top: medium none;" height="46" width="53">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">序号</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="75">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">招聘岗位名称</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="91">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">岗位类别</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="47">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">人数</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">学科、专业（方向）</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">学历</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">学位</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="195">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">其它资格条件</span>            </td>        </tr>        <tr style=";height:46px" height="46">            <td style="border-top: medium none;" height="46">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">01</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">2</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">统计学</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>            <td rowspan="10" style="border-bottom: 1px solid black; border-top: medium none;" width="195">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">&nbsp;联系人：邢亚林<br/> &nbsp; &nbsp; 88791138<br/> &nbsp; &nbsp; lxzp@ujs.edu.cn<br/> &nbsp; &nbsp;</span>            </td>        </tr>        <tr style=";height:46px" height="46">            <td style="border-top: medium none;" height="46">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">02</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">4</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">应用数学</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:46px" height="46">            <td style="border-top: medium none;" height="46" width="53">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">03</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="47">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">2</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">基础数学</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:46px" height="46">            <td style="border-top: medium none;" height="46" width="53">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">04</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="47">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">2</span>            </td>            <td>                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">概率论与数理统计</span>            </td>            <td style="border-top: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">05</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">1</span>            </td>            <td style="border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">计算数学（计算机图形学方向）</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">05</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">1</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">计算数学（微分方程数值解方向）</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">06</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">1</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">课程与教学论（数学方向）</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">07</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">3</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">物理学</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">08</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">1</span>            </td>            <td style="" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">电子科学与技术/仪器科学与技术（电子信息处理方向）</span>            </td>            <td style="border-top: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>        <tr style=";height:50px" height="50">            <td style="border-top: medium none;" height="50">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">09</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">专任教师</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">教学科研</span>            </td>            <td style="border-top:none;border-left:none">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">1</span>            </td>            <td style="border-left: medium none;" width="207">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">光学工程/机械工程（生物光信息技术方向）</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="67">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">研究生</span>            </td>            <td style="border-top: medium none; border-left: medium none;" width="69">                <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">博士</span>            </td>        </tr>    </tbody></table><p>    <br/></p>					
					<i>如何顺利加盟江苏大学？http://www.ujs.edu.cn/site1/node15</i>
		
					<div>江苏大学引进人才待遇</div>
					<div>一、学科带头人以上层次杰出人才待遇面议（另外细则），最高可年薪百万。</div>
					<div>二、优秀人才待遇</div>
					<p>1．按紧缺学科和一般学科，为教授提供安家费35万元、30万元，副教授20万元、15万元，博士18万元、13万元。 </p>
					<p>2．提供科研启动费，教授、副教授分别对应10万元、7万元；其中人文社科的科研启动费减半。</p>
					<p>注：</p>
					<p>1、紧缺学科认定（仅列出相关学科，其他学科已略去）</p>
					<p>应用数学、会计学、金融学（含：保险学）。</p>
					<p>2、海外人才聘为资格副教授,引进的海外人才中具有海外博士学历并经教育部学历认证的，或具有海外大学、科研机构博士后研究经历的，经用人单位考核，可直接认定为“资格副教授”。</p>
					<p>3、夫妻皆属引进人才，且引进后都从事教学、科研工作的，以层次高者计算，同时学校适当增加安家费，具体标准为：双教授（正高）增加8万；配偶为博士增加5万。</p>
				</div><!-- end class="articleBody" -->
			</div>
		</div>
		<div class="clearfix"></div>
	</div><!-- end class="row" -->
</div>

<div class="bottom">
	<?PHP  session_start(); if( !isset($_COOKIE["user"]) ){ setcookie("user","newGuest",time()+3600); }else { setcookie("user","oldGuest"); } ?> 


<div class="link">
	<div class="container  text-center">
		<div class="row">
			<div class="w9 pull-left">
				<div class="row">
					<div class="w1 pull-left friendLinkTitle">友<br/>情<br/>链<br/>接</div>
					<div class="w11 pull-left friendLinks">
						<div class="row">
							<div class="w12">
								<div class="w3 pull-left"><a href="http://my.ujs.edu.cn" target="_blank">江大信息门户</a></div>
								<div class="w3 pull-left"><a href="http://jwc.ujs.edu.cn" target="_blank">教务处</a></div>
								<div class="w3 pull-left"><a href="http://kjc.ujs.edu.cn" target="_blank">科技处</a></div>
								<div class="w3 pull-left"><a href="http://yjsb.ujs.edu.cn" target="_blank">研究生院</a></div>
							</div>
						</div>
						<div class="row">
							<div class="w12">
								<div class="w3 pull-left"><a href="http://webmail.ujs.edu.cn" target="_blank">江大邮件系统</a></div>
								<div class="w3 pull-left"><a href="http://rsc.ujs.edu.cn" target="_blank">人事处</a></div>
								<div class="w3 pull-left"><a href="http://xgc.ujs.edu.cn" target="_blank">学工处</a></div>
								<div class="w3 pull-left"><a href="http://jiangfan.ujs.edu.cn/xwzx" target="_blank">新闻中心</a></div>
							</div>
						</div>
					</div>	
					<div class="clearfix"></div>
				</div><!-- end row -->	
			</div>
			<div class="w3 pull-left">
				<div style="margin-left:100px;margin-top:25px;">
					<img src="__PUBLIC__/Images/wx.jpg" style="width:100px;height:100px;margin-left:10px;" alt="江苏大学官方微信公众账号" title="江苏大学官方微信公众账号" />
					<h5>江苏大学官方微信</h5>
				</div><!-- end 调控宽度 -->
			</div>	
		</div>
		<div class="clearfix"></div>
	</div><!-- end class="row" -->
</div>
<div style="background:#000;">
<div class="container text-center" style="line-height:35px;padding-top:0;"><a href="http://fos.ujs.edu.cn/newfos/">【旧版本】</a>&nbsp;&nbsp;&nbsp;&nbsp;江苏大学理学院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy;2010-2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：江苏省镇江市学府路301号70信箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮编：212013&nbsp;&nbsp;电话：0511-88780161
&nbsp &nbsp
您是第<?php echo ($visitor_count); ?>位访客
</div>
</div>
</div><!-- end bottom -->
</body>
</html>