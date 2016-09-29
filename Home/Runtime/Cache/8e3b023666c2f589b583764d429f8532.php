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

p{

	padding:0;

	margin:5px 0;

}

</style>

<title>系统工程硕士点</title>

</head>

<body>

<div class="top">

	<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0529185220_0) return;
                    window.mm_menu_0529185220_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529185220_0.addMenuItem("学院简介","window.open('__APP__/Index/primary', '_blank');");
  mm_menu_0529185220_0.addMenuItem("系科简介","location='__APP__/Department/index'");
  mm_menu_0529185220_0.addMenuItem("学院领导","location='__APP__/Index/leader'");
  mm_menu_0529185220_0.addMenuItem("机构设置","location='__APP__/Index/organization'");
  mm_menu_0529185220_0.addMenuItem("学院院训","location='__APP__/Index/saying'");
  mm_menu_0529185220_0.addMenuItem("大事记","location='__APP__/Index/bigevent'");
   mm_menu_0529185220_0.hideOnMouseOut=true;
   mm_menu_0529185220_0.bgColor='#B31B1B';
   mm_menu_0529185220_0.menuBorder=1;
   mm_menu_0529185220_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529185220_0.menuBorderBgColor='#FFFFFF';

    window.mm_menu_0529192200_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529192200_0.addMenuItem("博导风采","location='__APP__/Teacher/cate/id/2'");
  mm_menu_0529192200_0.addMenuItem("硕导风采","location='__APP__/Teacher/cate/id/3'");
  mm_menu_0529192200_0.addMenuItem("教授风采","location='__APP__/Teacher/cate/id/4'");
  mm_menu_0529192200_0.addMenuItem("教师风采","location='__APP__/Teacher/index'");
  mm_menu_0529192200_0.addMenuItem("各类人才","location='__APP__/Teacher/glrc'");
  mm_menu_0529192200_0.addMenuItem("招聘计划","location='__APP__/Index/rczp'");
   mm_menu_0529192200_0.hideOnMouseOut=true;
   mm_menu_0529192200_0.bgColor='#B31B1B';
   mm_menu_0529192200_0.menuBorder=1;
   mm_menu_0529192200_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529192200_0.menuBorderBgColor='#FFFFFF';

  window.mm_menu_0529200742_0 = new Menu("root",102,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529200742_0.addMenuItem("博士后流动站","location='__APP__/Index/xkjs'");
  mm_menu_0529200742_0.addMenuItem("博士点","location='__APP__/Index/bsd'");
  mm_menu_0529200742_0.addMenuItem("硕士点","location='__APP__/Ssd/ssd'");
   mm_menu_0529200742_0.hideOnMouseOut=true;
   mm_menu_0529200742_0.bgColor='#B31B1B';
   mm_menu_0529200742_0.menuBorder=1;
   mm_menu_0529200742_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529200742_0.menuBorderBgColor='#FFFFFF';

  window.mm_menu_0529200929_0 = new Menu("root",204,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,true,false);
  mm_menu_0529200929_0.addMenuItem("本科生培养","location='__APP__/Develop/index/category/1'");
  mm_menu_0529200929_0.addMenuItem("研究生培养","location='__APP__/Develop/index/category/2'");
  mm_menu_0529200929_0.addMenuItem("最受学生欢迎的十佳教师","location='__APP__/Teacher/top'");
   mm_menu_0529200929_0.hideOnMouseOut=true;
   mm_menu_0529200929_0.bgColor='#B31B1B';
   mm_menu_0529200929_0.menuBorder=1;
   mm_menu_0529200929_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529200929_0.menuBorderBgColor='#FFFFFF';

  window.mm_menu_0529202445_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529202445_0.addMenuItem("科研机构","location='__APP__/Kyjg/kyjg'");
  mm_menu_0529202445_0.addMenuItem("科研项目","location='__APP__/Index/kyxm'");
  mm_menu_0529202445_0.addMenuItem("科研成果","location='__APP__/Index/kycg'");
   mm_menu_0529202445_0.hideOnMouseOut=true;
   mm_menu_0529202445_0.bgColor='#B31B1B';
   mm_menu_0529202445_0.menuBorder=1;
   mm_menu_0529202445_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529202445_0.menuBorderBgColor='#FFFFFF';

    window.mm_menu_0529202618_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529202618_0.addMenuItem("组织建设","location='__APP__/Dqgz/zzjs'");
  mm_menu_0529202618_0.addMenuItem("学院党委","location='__APP__/Dqgz/xydw'");
  mm_menu_0529202618_0.addMenuItem("学院团委","location='__APP__/Dqgz/xytw'");
  mm_menu_0529202618_0.addMenuItem("学院工会","location='_APP__/Dqgz/xygh'");
   mm_menu_0529202618_0.hideOnMouseOut=true;
   mm_menu_0529202618_0.bgColor='#B31B1B';
   mm_menu_0529202618_0.menuBorder=1;
   mm_menu_0529202618_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529202618_0.menuBorderBgColor='#FFFFFF';
window.mm_menu_0529204444_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529204444_0.addMenuItem("学工信息","location='__APP__/Xsgz/xgxx'");
  mm_menu_0529204444_0.addMenuItem("规章制度","location='__APP__/Xsgz/gzzd'");
  mm_menu_0529204444_0.addMenuItem("组织机构","location='__APP__/Xsgz/zzjg'");
  mm_menu_0529204444_0.addMenuItem("心灵港","location='__APP__/Xsgz/xlg'");
  mm_menu_0529204444_0.addMenuItem("院关工委","location='__APP__/Xsgz/yggw'");
  mm_menu_0529204444_0.addMenuItem("学生风采","location='__APP__/Xsgz/xsfc'");
   mm_menu_0529204444_0.hideOnMouseOut=true;
   mm_menu_0529204444_0.bgColor='#B31B1B';
   mm_menu_0529204444_0.menuBorder=1;
   mm_menu_0529204444_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529204444_0.menuBorderBgColor='#FFFFFF';

  window.mm_menu_0529210952_0 = new Menu("root",124,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,true,false);
  mm_menu_0529210952_0.addMenuItem("对外交流综述","location='__APP__/Index/dwjl'");
  mm_menu_0529210952_0.addMenuItem("国际会议","location='__APP__/Index/gjhy'");
  mm_menu_0529210952_0.addMenuItem("国内会议","location='__APP__/Index/gnhy'");
  mm_menu_0529210952_0.addMenuItem("阿卡迪亚","window.open('http://www.arcadia-china.com/', '_blank');");
  mm_menu_0529210952_0.addMenuItem("合作办学","window.open('http://foreign.ujs.edu.cn/about/hzbx/index.html', '_blank');");
   mm_menu_0529210952_0.hideOnMouseOut=true;
   mm_menu_0529210952_0.bgColor='#B31B1B';
   mm_menu_0529210952_0.menuBorder=1;
   mm_menu_0529210952_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529210952_0.menuBorderBgColor='#FFFFFF';

  window.mm_menu_0529211304_0 = new Menu("root",96,28,"微软雅黑",14,"#B31B1B","#FFFFFF","#FFFFFF","#B31B1B","center","middle",3,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_0529211304_0.addMenuItem("党建工作","location='__APP__/File/index/id/1'");
  mm_menu_0529211304_0.addMenuItem("研究生教育","location='__APP__/File/index/id/2'");
  mm_menu_0529211304_0.addMenuItem("本科生教育","location='__APP__/File/index/id/3'");
  mm_menu_0529211304_0.addMenuItem("学生工作","location='__APP__/File/index/id/4'");
  mm_menu_0529211304_0.addMenuItem("其他","location='__APP__/File/index/id/5'");
   mm_menu_0529211304_0.hideOnMouseOut=true;
   mm_menu_0529211304_0.bgColor='#B31B1B';
   mm_menu_0529211304_0.menuBorder=1;
   mm_menu_0529211304_0.menuLiteBgColor='#B31B1B';
   mm_menu_0529211304_0.menuBorderBgColor='#FFFFFF';

mm_menu_0529211304_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<!--<script language="JavaScript" src="mm_menu.js"></script>-->
<script language="JavaScript" src="http://templete.vastsum.net/fos/Home/Tpl/Public/mm_menu.js"></script>

<script language="JavaScript1.2">mmLoadMenus();</script>
<div class="topLine bcm">
  <div class="container">
    <div class="row">
      <div class="w1 pull-left"><a href="http://www.ujs.edu.cn/site1/" target="_blank">学校首页</a></div>
      <div class="w1 pull-left"><a href="http://fos.ujs.edu.cn/newfos/news/meetinginfo.php" target="_blank">学院会议</a></div>
      <div class="w6 pull-left"><a href="mailto:lxydw@ujs.edu.cn" title="lxydw@ujs.edu.cn">理学院信箱</a></div>
      <div class="w1 pull-left"><a href="__APP__/Index/rczp">人才招聘</a></div>
      <div class="w1 pull-left"><a href="__ROOT__/admin.php">网站管理</a></div>
      <div class="ww2 pull-left"><a href="__APP__/En/index" target="_blank">English Version</a></div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- end class="topLine" -->
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
    <div class="w6 pull-left"> <img src="__PUBLIC__/Images/lxybanner.png" class="imgLXY"/> </div>
    <div class="w3 pull-left" style="margin-left:200px;">
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"

				style="margin:0;padding:0"

				codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"

				width="300" height="100" id="xiaoxun" align="">
        <param name=movie value="__PUBLIC__/Images/xiaoxun.swf" />
        <param name=quality value=high />
        <param name=wmode value=transparent />
        <embed src="__PUBLIC__/Images/xiaoxun.swf" quality=high wmode=transparent width="300" height="100" name="xiaoxun" align=""

				type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </embed>
      </object>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- end class="topBanner" -->
<div class="caidan">
  <ul>
    <li><a href="__APP__/Index/index">学院主页</a></li>
    <li><a href="__APP__/Index/primary" name="link2" id="link1" onmouseover="MM_showMenu(window.mm_menu_0529185220_0,-23,40,null,'link2')" onmouseout="MM_startTimeout();">学院概况</a></li>
    <li><a href="__APP__/Teacher/index" name="link4" id="link3" onmouseover="MM_showMenu(window.mm_menu_0529192200_0,-20,40,null,'link4')" onmouseout="MM_startTimeout();">师资队伍</a></li>
    <li><a href="__APP__/Index/xkjs" name="link5" id="link5" onmouseover="MM_showMenu(window.mm_menu_0529200742_0,-21,40,null,'link5')" onmouseout="MM_startTimeout();">学科建设</a></li>
    <li><a href="__APP__/Develop/index/category/1" name="link6" id="link6" onmouseover="MM_showMenu(window.mm_menu_0529200929_0,-75,40,null,'link6')" onmouseout="MM_startTimeout();">学生培养</a></li>
    <li><a href="__APP__/Kyjg/kyjg" name="link7" id="link7" onmouseover="MM_showMenu(window.mm_menu_0529202445_0,-18,40,null,'link7')" onmouseout="MM_startTimeout();">科学研究</a></li>
    <li><a href="__APP__/Index/dqgz" name="link12" id="link8" onmouseover="MM_showMenu(window.mm_menu_0529202618_0,-18,40,null,'link12')" onmouseout="MM_startTimeout();">党群工作</a></li>
    <li><a href="__APP__/Xsgz/xgxx" name="link9" id="link9" onmouseover="MM_showMenu(window.mm_menu_0529204444_0,-18,40,null,'link9')" onmouseout="MM_startTimeout();">学生工作</a></li>
    <li><a href="__APP__/Index/dwjl" name="link10" id="link10" onmouseover="MM_showMenu(window.mm_menu_0529210952_0,-28,40,null,'link10')" onmouseout="MM_startTimeout();">对外交流</a></li>
    <li><a href="__APP__/File/index" name="link11" id="link11" onmouseover="MM_showMenu(window.mm_menu_0529211304_0,-13,40,null,'link11')" onmouseout="MM_startTimeout();">下载中心</a></li>
  </ul>
</div>
<!-- end class="nav" -->


	<link rel="stylesheet" type="text/css" href="/fos/Public/Css/index.css" />

</div><!-- end top -->



<div class="container">

	<div class="row mt20">

	

			<div class="w2 pull-left">

			<div class="navside">

				<div class="navList mb20">

					<div class="navTitle">博士后流动站</div><!-- 数据库读出数据 -->

					<ul>

						<li><a href="__APP__/Index/xkjs">控制科学与工程</a></li><!-- 数据库读出 -->

						

					</ul>

					

					<div class="navTitle">博士点</div><!-- 数据库读出数据 -->

					<ul>

						<li><a href="__APP__/Index/bsd">系统工程</a></li><!-- 数据库读出 -->

						

					</ul>

					

					<div class="navTitle">硕士点</div><!-- 数据库读出数据 -->

					<ul>

						<!-- <li><a href="__APP__/Ssd/yysx">应用数学</a></li>

						<li><a href="__/APP__/Ssd/jcsx">基础数学</a></li>

						<li><a href="__/APP__/Ssd/gll">概率论与数理统计</a></li>

						<li><a href="__/APP__/Ssd/xtgc">系统工程</a></li>

						<li><a href="__/APP__/Ssd/ycx">运筹学与控制论</a></li>

						<li><a href="__/APP__/Ssd/jssx">计算数学</a></li> -->

						<li><a href="__APP__/Ssd/sxyjssd">数学（一级）</a></li>
						
						<li><a href="__APP__/Ssd/xtgcssd">系统工程</a></li>

						<li><a href="__APP__/Ssd/wldzx">物理电子学</a></li>

						<li><a href="__APP__/Ssd/gxgc">光学工程</a></li>

						<li><a href="__APP__/Ssd/wdz">微电子学与固体电子学</a></li>

					</ul>

				</div><!-- end class="navList" -->

			</div><!-- end navside -->

		</div><!-- end class="w2" -->

		

		<div class="w10 pull-left">

			<div class="article">

				<div class="articleTitle">

					<div>数学一级硕士点</div>

					<hr/>

				</div>

				<div class="articleBody w9 center-block">
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 18px;"><strong>1</strong><strong>、学科概况</strong></span><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><strong><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;"></span></strong> </span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">数学学科1998年获得应用数学硕士点，2003年获得基础数学硕士点，2005年获得概率统计硕士点，2011年获得数学一级学科硕士点。在教育部组织的2012年学科点评估中数学一级学科取得全国硕士点高校排名第一的好成绩。目前数学学科有特聘院士1人，博士生导师6人，硕士生导师30人，其中教授16人，副教授24人，拥有一批优秀的青年骨干教师，已经形成结构合理的学术梯队。数学学科目前负责国家自然科学基金23项及省部级项目8项；近5年来发表论文180多篇，被SCI检索120多篇；获江苏省教学成果一等奖1项、二等奖1项；省部级科技进步一等奖1项、二等奖2项，特别在耗散系统孤立波的长期动力学行为研究中被鉴定为国际领先水平，关于非线性波动方程解分析被鉴定为国际领先水平。数学学科毕业研究生400余名，其中获得江苏省优秀硕士论文3篇，江苏大学优秀硕士论文22篇。毕业硕士生中1人荣获第十届钟家庆数学奖，数十人被中科院、南京大学、上海交通大学、东华大学、上海财经大学等录取为博士生，多人免试推荐攻读本校系统工程、计算机科学与技术及管理科学与工程博士学位，其余进入银行、证券公司、企业等，或担任高校、中学教师。</span></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"><strong>2</strong><strong><span style="font-family: 宋体;">、</span></strong><strong><span style="font-family: 宋体;">研究方向</span></strong></span><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><strong><span style="font-size: 16px; font-family: 宋体;"></span></strong><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"> </span></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><strong><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">(1) </span></strong><strong><span style="font-size: 16px; font-family: 宋体;">非线性微分方程</span></strong><strong> </strong></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">&nbsp;&nbsp;&nbsp; 方向负责人为卢殿臣教授，本方向主要从事非线性微分方程解的可计算性理论研究和动力学分析；</span> <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">研究刻划数学物理问题的非线性微分方程模型及其解的适定性、爆破和孤立子解的稳定性。</span></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">①</span> <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">关于非线性浅水波中尖峰孤立波的适定性、稳定性、散射理论的研究。</span></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">②</span> 关于微分方程解算子的可计算性及计算复杂性的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">③</span> 关于非线性孤立波方程的精确解及时空动力学的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">④</span> 关于可压缩流体力学中的数学理论的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">⑤</span> 关于变分方法与偏微分方程的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"><strong><span style="font-family: &#39;Times New Roman&#39;, serif;">(2) </span></strong><strong>概率极限理论与信息论</strong></span><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;, serif;"> </span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">&nbsp;&nbsp;&nbsp; 方向负责人为杨卫国教授，本方向主要研究可列非齐次马氏链的强大数定律与Shannon-McMillan定理，树指标马氏链的强大数定律与Shannon-McMillan定理，任意随机变量序列的强极限定理，任意随机变量序列关于非齐次马氏链的强偏差定理，树上任意随机场关于树指标马氏链的强偏差定理，树指标高阶马氏链的强大数定律与Shannon-McMillan定理，树指标高阶马氏链的强偏差定理。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">① 关于隐马尔可夫模型的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">② 关于树图上Markov随机场的强大数定律及熵定理的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"><strong>(3) </strong><strong>系统建模分析与控制</strong></span><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"> </span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">&nbsp;&nbsp; <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;;">&nbsp;方向负责人为李医民教授，本方向融合非线性科学理论、复杂系统理论、经济增长理论、控制原理、博弈均衡决策原理，形成了生态系统、能源系统、经济系统三个主要背景的问题建模与动力学分析和控制相结合的学科发展特色。</span></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">① 关于能源供需系统、碳排放演化动力系统、新能源产业发展及能源可持续发展的理论与应用的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">②关于寡头产量竞争与价格竞争、资源开发的竞争与可持续发展、高碳能源与低碳能源的竞争与演化的理论与应用的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">③ 关于复杂生态系统的建模与仿生智能控制的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">④ 关于复杂网络建模与应用的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"><strong>(4) </strong><strong>动力系统理论及应用</strong></span><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;"><strong><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;"> </span></strong></span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">&nbsp;&nbsp;&nbsp; 方向负责人为姚洪兴教授，本方向将动力系统理论、分支与混沌控制方法应用于金融系统建模与经济系统决策分析；研究平面多项式微分系统的极限环理论；将分形、分岔理论应用于材料损伤和断裂的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">① 关于复杂系统建模与分析的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">② 关于分形插值稳定性的研究。</span>
</p>
<p>
    <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">③ 关于平面动力系统分支和极限环理论的研究。</span>
</p>
<p>
    <br/>
</p>		

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