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

<title>系统工程博士点</title>

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
      <div class="w2 pull-left"><a href="__APP__/En/index" target="_blank">English Version</a></div>
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

					<div>系统工程博士点</div>

					<hr/>

				</div>

				<div class=" w9 center-block">

					<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">一、学科简介</span></strong>
</p>
<p style="text-indent:29px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">江苏大学系统工程学科依托江苏大学理学院、电气学院及计算机学院建设。</span>1998<span style=";font-family:Microsoft Yahei">年获得硕士学位授予权，</span>2003<span style=";font-family:Microsoft Yahei">年获得博士学位授予权，</span>2005<span style=";font-family:Microsoft Yahei">年获评江苏省重点学科，现有控制科学与工程博士后流动站。系统工程学科目前有特聘院士</span>1<span style=";font-family:Microsoft Yahei">人，博导</span>6<span style=";font-family:Microsoft Yahei">人，硕导</span>9<span style=";font-family:Microsoft Yahei">人。学科承担包括国家社科基金重大项目、国家自然科学基金重大研究计划等主要课题</span>49<span style=";font-family:Microsoft Yahei">项，省级鉴定</span>6<span style=";font-family:Microsoft Yahei">项。获得教育部及省部级科学技术奖、哲学社会科学奖、教学成果奖共</span>16<span style=";font-family:Microsoft Yahei">项。出版学术专著</span>4<span style=";font-family:Microsoft Yahei">部，近</span>5<span style=";font-family:Microsoft Yahei">年，在</span>JCR<span style=";font-family:Microsoft Yahei">一区国际权威期刊发表</span>SCI<span style=";font-family:Microsoft Yahei">、</span>SSCI<span style=";font-family:Microsoft Yahei">检索论文</span>140<span style=";font-family:Microsoft Yahei">余篇。目前在读博士生</span>27<span style=";font-family:Microsoft Yahei">人，已毕业并授予博士学位</span>41<span style=";font-family:Microsoft Yahei">人，授予硕士学位的有</span>94<span style=";font-family:Microsoft Yahei">人。获得江苏省优秀博士学位论文</span>2<span style=";font-family:Microsoft Yahei">篇，江苏省优秀硕士学位论文</span>3<span style=";font-family:Microsoft Yahei">篇。</span>
</p>
<p style="text-indent:29px;line-height:27px">
    &nbsp;
</p>
<p style="text-indent:29px;line-height:27px">
    <span style=";position:relative;z-index:251662336;left:-12px;top:5px;width:576px;height:121px"><img title="1459061477110191.gif" src="/fos/Public/upload/image/20160327/1459061477110191.gif"/></span>&nbsp;
</p>

<p>
    <br clear="ALL"/> 
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">1.</span></strong><strong><span style="font-size:16px;font-family: Microsoft Yahei">学位点</span></strong>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:25px">
            <td style="border: 1px solid windowtext; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="25" width="188">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">学位点名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="25" width="380">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">学位授予级别</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="25" width="188">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">系统工程</span></strong>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="25" width="380">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">江苏省重点学科，授予博士、硕士学位</span></strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    &nbsp;
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">2.</span></strong><strong><span style="font-size:16px;font-family: Microsoft Yahei">依托平台</span></strong>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">学科依托江苏大学能源发展与环境保护战略研究中心、非线性科学研究中心与系统工程研究所，同时拥有数学建模专业实验室</span>740<span style=";font-family:Microsoft Yahei">平方米</span><span style=";font-family:Microsoft Yahei">，科研设施齐全，拥有先进的工作站，计算机房，学科资料实验室等。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <strong><span style=";font-family:Microsoft Yahei">平台</span></strong><strong>1</strong><strong><span style=";font-family:Microsoft Yahei">：江苏大学能源发展与环境保护战略研究中心</span></strong><span style=";font-family:Microsoft Yahei">。学科通过与数学学科、管理学科及能源经济学科的交叉融合，于</span>2009<span style=";font-family:Microsoft Yahei">年</span>11<span style=";font-family:Microsoft Yahei">月获批组建江苏大学能源发展与环境保护战略研究中心，这是江苏省教育厅批准成立的首批江苏高校哲学社会科学重点研究基地之一。中心瞄准国家能源发展与环境保护的重大需求，采用多学科交叉的复杂系统理论和方法，开展能源供需安全、新能源产业发展、低碳经济发展及能源可持续发展等领域的基础与应用研究。中心以江苏省高校哲学社会科学重点基地重大项目为基础，通过研究学科交叉科研大项目，更有效的整合和链接各相关学科，辐射带动更多学科共同发展。</span>2015<span style=";font-family:Microsoft Yahei">年</span>5<span style=";font-family:Microsoft Yahei">月中心在江苏省教育厅举行的高校哲学社会科学重点研究基地考核中，顺利通过考核验收，被评为优秀等级。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <strong><span style=";font-family:Microsoft Yahei">平台</span></strong><strong>2</strong><strong><span style=";font-family:Microsoft Yahei">：</span></strong><span style=";font-family:Microsoft Yahei">非线性科学研究中心成立于</span>1997<span style=";font-family:Microsoft Yahei">年，经过</span>10<span style=";font-family:Microsoft Yahei">多年建设与发展，目前学术梯队合理，整体实力强，发展后劲足。由特聘院士郭柏灵任中心主任，副校长田立新教授任中心常务副主任。该研究中心以非线性偏微分方程、动力系统的分岔与混沌理论、神经网络动力学、孤立子与非线性波、哈密顿系统和无穷维动力系统的理论与应用等作为重点研究方向，综合采用数学分析、计算机数值研究与模拟及物理和化学实验三大手段，揭示和探索非线性现象的共同规律，攻克非线性科学研究领域的困难问题。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <strong><span style=";font-family:Microsoft Yahei">平台</span></strong><strong>3</strong><strong><span style=";font-family:Microsoft Yahei">：</span></strong><span style="font-family: Microsoft Yahei">系统工程研究所</span><span style=";font-family:Microsoft Yahei">成立于</span>2003<span style=";font-family:Microsoft Yahei">年，</span><span style="font-family:Microsoft Yahei">主要从事金融系统工程、水资源优化配置及复杂系统分析的研究，力求理论与应用相结合，在方法、手段上有所创新，具体在以下领域：经济系统理论及应用、信息论及其应用、经济系统建模分析与控制展开研究工作。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    &nbsp;
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:45px">
            <td style="border: 1px solid windowtext; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="300">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">平台名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="201">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">类别</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="230">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">批准单位与时间</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:45px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="300">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">能源发展与环境保护战略研究中心</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="201">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省高校哲学社会科学</span>
                </p>
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">重点研究基地</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="230">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省教育厅</span>
                </p>
                <p style="text-align:center">
                    2009<span style=";font-family:Microsoft Yahei">年</span>
                </p>
            </td>
        </tr>
        <tr style=";height:45px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="300">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">非线性科学研究中心</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="201">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏大学院级研究中心</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="230">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏大学</span>
                </p>
                <p style="text-align:center">
                    1997<span style=";font-family:Microsoft Yahei">年</span>
                </p>
            </td>
        </tr>
        <tr style=";height:45px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="300">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">系统工程研究所</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="201">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏大学院级研究中心</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="45" width="230">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏大学</span>
                </p>
                <p style="text-align:center">
                    2003<span style=";font-family:Microsoft Yahei">年</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-indent:28px">
    <span style=";font-family:Microsoft Yahei">&nbsp;</span>
</p>
<p style="text-indent:28px">
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow">
            <td height="5" width="24"></td>
            <td height="5" width="24"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <img title="1459061495918341.gif" src="/fos/Public/upload/image/20160327/1459061495918341.gif"/>
            </td>
        </tr>
		<tr>
			<td></td>
			<td>
                <img title="1459064670131156.gif" src="/fos/Public/upload/image/20160327/1459064670131156.gif"/>
            </td>
		</tr>
    </tbody>
</table>
<p>
    <span style=";font-family: Microsoft Yahei">&nbsp;</span> 
</p>

<p>
    <br clear="ALL"/> 
</p>
<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">二、学科队伍与方向</span></strong>
</p>
<p>
    <strong><span style="font-size:16px">1.</span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">学科队伍建设</span></strong>
</p>
<p>
    <span style="font-size:14px;font-family:Microsoft Yahei">学科现有</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">20</span><span style="font-size:14px;font-family:Microsoft Yahei">余名教师，其中有特聘院士</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">1</span><span style="font-size:14px;font-family: Microsoft Yahei">人，博导</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">6</span><span style="font-size:14px;font-family:Microsoft Yahei">人，硕导</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">9</span><span style="font-size:14px;font-family:Microsoft Yahei">人。新世纪“百千万人才工程”国家级人选</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">1</span><span style="font-size:14px;font-family: Microsoft Yahei">人，江苏省“</span><span style="font-size:14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">333</span><span style="font-size:14px;font-family:Microsoft Yahei">工程”第二层次培养人选</span><span style="font-size: 14px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">2</span><span style="font-size:14px;font-family: Microsoft Yahei">人，江苏省“六大人</span>
</p>
<p>
    <br/>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">才高峰”人才</span>3<span style=";font-family:Microsoft Yahei">人，江苏省“青蓝工程”中青年学术带头人</span>1<span style=";font-family:Microsoft Yahei">人。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <strong><span style=";font-family:Microsoft Yahei">学科带头人：田立新、孙梅</span></strong>
</p>
<p style="text-indent:28px">
    <strong>&nbsp;</strong>
</p>
<p>
    <strong><span style="font-size:16px">2.</span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">学科主要方向</span></strong>
</p>
<p style="text-indent:21px">
    （<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">1</span>）非线性复杂系统理论及应用
</p>
<p style="text-indent:14px">
    <span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">&nbsp;</span>（<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">2</span>）能源经济系统分析及建模
</p>
<p style="text-indent:21px">
    （<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">3</span>）复杂系统分析及决策
</p>
<p style="text-indent:21px">
    （<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">4</span>）信息论
</p>
<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">三、学科特色</span></strong>
</p>
<p>
    <strong><span style="font-size:16px">1. </span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">非线性复杂系统理论及应用</span></strong>
</p>
<p style=";margin-bottom:0;text-indent:28px;line-height:27px">
    本方向主要从事非线性微分方程解的可计算性理论研究和动力学分析，研究刻划数学物理问题的非线性微分方程模型及其解的适定性、爆破和孤立子解的稳定性。所研究的问题是当今非线性科学研究热点问题，具有重要的应用背景与理论价值。国内首创在二型有效论的框架下，运用算子理论和方法，建立了一类非线性系统的可计算性理论，从而可以在计算机上给出该系统初值问题的解析近似解。关于可压缩流体力学中的数学理论的研究，部分解决了空气动力学中的一个著名猜测，解决了三维位势流中跨音速锥状激波的稳定性问题，解决了多种条件下拟线性方程组解的适定性或非适定性问题。关于变分方法与偏微分方程的研究，对强不定问题、椭圆型方程基态解、多包解和哈密尔顿系统同宿轨的存在性，特别是对于具有临界指数增长的半径典椭圆型方程（组）中基态解的存在性及其性质的研究，取得了一系列的研究成果。出版专著<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">1</span>部。近<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">5</span>年，在国际权威杂志发表论文，如：<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Math.Ann</span>，<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Comm. Math. Phy. ,J. Diff. Equ. , J. Math. Anal. Appli., J. Math. Phy., &nbsp;India. Univ. Math. J. , Phy. Lett A, Phy A</span>、<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Phy. Rev.E</span>等 ，其中<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">ESI</span>高倍引论文<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">1</span>篇，建立了多角度、全方位、系统的理论及方法，独具特色 。
</p>
<p style=";margin-bottom:0;text-indent:28px;line-height:27px">
    <img src="/fos/Public/upload/image/20160327/1459061804108728.gif" title="1459061804108728.gif" alt="image014.gif"/><img alt="image012.gif" src="/fos/Public/upload/image/20160327/1459061826704042.gif" title="1459061826704042.gif"/><img alt="image018.gif" src="/fos/Public/upload/image/20160327/1459061887898632.gif" title="1459061887898632.gif"/>
</p>
<p style=";margin-bottom:0;text-indent:28px;line-height:27px">
    <img class="loadingclass" id="loading_ima7rb7v" src="http://web.work.com/fos/Public/ueditor/themes/default/images/spacer.gif" title="正在上传..."/>
</p>
<p>
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p>
    <br/>
</p>
<p>
    <strong><span style="font-size:16px">2. </span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">能源经济系统分析及建模</span></strong>
</p>
<p style=";margin-bottom:0;text-indent:28px;line-height:27px">
    本方向融合非线性科学理论、复杂系统理论、经济增长理论、控制原理、博弈均衡决策原理，形成了生态系统、能源系统、经济系统三个主要背景的问题建模与动力学分析和控制相结合的学科发展特色，处于国内领先、部分研究达到国际先进水平。主要在能源供需系统、碳排放演化动力系统、新能源产业发展及能源可持续发展等领域开展基础理论研究与应用研究。建立能源供需微分方程模型、区域碳排放动态演化模型及理论，构建了不同形成机制的能源供需复杂网络模型，相关研究属于国际首创。首次将碳税与政府调控纳入节能减排系统，给出了中国开征碳税的最佳时间及最佳起征点。利用博弈理论的均衡分析方法，在寡头产量竞争与价格竞争、资源开发的竞争与可持续发展、高碳能源与低碳能源的竞争与演化等领域开展基础理论研究与应用研究。出版专著<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">3</span>部。近<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">5</span>年，多篇论文发表在<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Applied Energy</span>、<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Energy Policy</span>、<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">Energy</span>等<span style="font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">JCR</span>一区国际权威期刊。主要研究成果为政府企事业部门提供决策咨询，并已被采纳。
</p>
<p style="line-height:27px">
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow">
            <td height="15" width="24"></td>
            <td height="15" width="24"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <img alt="image021.gif" src="/fos/Public/upload/image/20160327/1459065170707012.gif" title="1459065170707012.gif"/>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <br/>
</p>
<p style="line-height:27px">
    <img alt="image023.gif" src="/fos/Public/upload/image/20160327/1459065190333539.gif" title="1459065190333539.gif"/>
</p>

<p>
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p>
    <br/>
</p>
<p>
    <strong><span style="font-size:16px">3. </span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">复杂网络理论及其应用</span></strong>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">本方向主要从事复杂网络建模及控制、相依网络等研究</span><span style="font-family: Microsoft Yahei">。探索复杂网络的复杂性与普适性、网络拓扑结构与网络动力学之间的关系，研究了它们的无标度与小世界性质，并进行了系统的仿真分析。基于复杂网络理论研究经济系统、金融系统等问题中出现的复杂现象，以及系统的不确定性、非对称性、非线性系统的行为、演化及风险。关于复杂网络的研究，与美国科学院院士</span>Stanley<span style="font-family:Microsoft Yahei">合作在</span>Physical Review E<span style="font-family:Microsoft Yahei">、</span>EPL<span style="font-family:Microsoft Yahei">、</span>Physica A<span style="font-family:Microsoft Yahei">等国际权威期刊发表多篇论文。</span>
</p>
<p style="line-height:27px">
    <img alt="image025.gif" src="/fos/Public/upload/image/20160327/1459062041127714.gif" title="1459062041127714.gif"/>
</p>
<p style="text-indent:154px">
    &nbsp;<strong><span style=";font-family:Microsoft Yahei">合作者：美国科学院院士</span></strong><strong>&nbsp; G. Stanley</strong>
</p>
<p style="text-indent:154px">
    <br/>
</p>
<p>
    <strong>&nbsp; </strong>
</p>
<p style="text-indent:155px">
    <strong>&nbsp;</strong>
</p>
<p style="text-indent:155px">
    <strong>&nbsp;<img alt="image029.gif" src="/fos/Public/upload/image/20160327/1459062156275446.gif" title="1459062156275446.gif"/></strong>
</p>
<p style="text-indent:155px">
    <strong><br/></strong>
</p>
<p>
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p>
    <strong><span style="font-size:16px">4. </span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">信息系统理论及其应用</span></strong>
</p>
<p style="text-indent:27px;line-height:27px">
    <span style="font-family:Microsoft Yahei">本方向主要研究可列非齐次马氏链的强大数定律与</span>Shannon-McMillan<span style="font-family:Microsoft Yahei">定理，树指标马氏链的强大数定律与</span>Shannon-McMillan<span style="font-family:Microsoft Yahei">定理，任意随机变量序列的强极限定理，任意随机变量序列关于非齐次马氏链的强偏差定理，树上任意随机场关于树指标马氏链的强偏差定理，树指标高阶马氏链的强大数定律与</span>Shannon-McMillan<span style="font-family:Microsoft Yahei">定理，树指标高阶马氏链的强偏差定理。在国际</span>JCR<span style="font-family:Microsoft Yahei">一区等期刊发表论文，如</span>:IEEE Transactions on Information Theory, J.Math.Anal.Appl.<span style="font-family:Microsoft Yahei">，</span>J. Theoretical Probability,Stochastic Analysis andApplications<span style="font-family: Microsoft Yahei">等。</span>
</p>
<p style="text-indent:27px">
    &nbsp;
</p>
<p>
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow">
            <td height="1" width="10"></td>
            <td height="1" width="10"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <img alt="image033.gif" src="/fos/Public/upload/image/20160327/1459062218125476.gif" title="1459062218125476.gif"/>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <strong><span style="font-size:19px">&nbsp;</span></strong>
</p>
<p>
    <br clear="ALL"/> 
</p>
<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">四</span></strong><strong><span style="font-size:19px">. </span></strong><strong><span style="font-size:19px;font-family: Microsoft Yahei">人才培养</span></strong>
</p>
<p style="line-height:27px">
    &nbsp;&nbsp;&nbsp; <span style=";font-family:Microsoft Yahei">系统工程学科自</span>2003<span style=";font-family:Microsoft Yahei">年以来获江苏省教学成果一等奖</span>1<span style=";font-family:Microsoft Yahei">项，获江苏省优秀博士论文</span>2<span style=";font-family:Microsoft Yahei">篇，江苏省优秀硕士论文</span>3<span style=";font-family:Microsoft Yahei">篇。每年招收博士研究生</span>4<span style=";font-family:Microsoft Yahei">人左右、硕士研究生</span>6<span style=";font-family:Microsoft Yahei">人左右。目前在读博士生</span>27<span style=";font-family:Microsoft Yahei">人，已毕业并授予博士学位</span>41<span style=";font-family:Microsoft Yahei">人，授予硕士学位</span>94<span style=";font-family:Microsoft Yahei">人。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <img alt="image035.jpg" src="/fos/Public/upload/image/20160327/1459062253765750.jpg" title="1459062253765750.jpg"/>
</p>

<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">1.</span></strong><strong><span style="font-size:16px;font-family: Microsoft Yahei">近年来学生科技竞赛获奖情况</span></strong>
</p>
<p>
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:53px">
            <td style="border: 1px solid windowtext; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px; word-break: break-all;" height="53" width="211">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">获奖名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="144">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">作品名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="77">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">指导教师</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">完成人</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">获奖类别</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="211">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2009</span><span style=";font-family:Microsoft Yahei">年第十一届“挑战杯”全国大学生课外学术科技作品竞赛</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="144">
                <p style="text-align:center">
                    <span style="font-family:Microsoft Yahei">关于混沌突然发生系统控制的研究</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="77">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">董高高</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">二等奖</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <strong>&nbsp;</strong>
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">2.</span></strong><strong><span style="font-size:16px;font-family: Microsoft Yahei">近年来获得的优博优硕论文</span></strong>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:53px">
            <td style="border: 1px solid windowtext; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">获奖名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">论文名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">指导教师</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">完成人</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <strong><span style=";font-family:Microsoft Yahei">获奖时间</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省优秀博士学位论文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">非线性波系统的精确解</span>
                </p>
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">与解析近似解</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">卢殿臣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2009</span>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省优秀博士学位论文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">一类能源供需系统的动力学分析、控制与同步</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">孙&nbsp; 梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2007</span>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省优秀硕士学位论文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">神经网络同步与多智能体</span>
                </p>
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">一致性问题研究</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">孙&nbsp; 梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">韩&nbsp; 敦</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2015</span>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省优秀硕士学位论文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">三组份</span>Camassa-Holm<span style=";font-family:Microsoft Yahei">方程的初边值问题和爆破理论</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">袁清雯</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2014</span>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="169">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">江苏省优秀硕士学位论文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="186">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">时变耦合延迟复杂网络的自适应同步和脉冲控制</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="78">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">孙&nbsp; 梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="64">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">曾长燕</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 7px;" height="53" width="72">
                <p style="text-align:center">
                    <span style=";font-family:Microsoft Yahei">2011</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <strong><span style="font-size:19px">&nbsp;</span></strong>
</p>
<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">五．科研成果</span></strong>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">系统工程学科成立以来，承担国家社会科学基金重大项目</span>1<span style=";font-family:Microsoft Yahei">项、国家自然科学基金重大研究计划面上项目及后期项目</span>4<span style=";font-family:Microsoft Yahei">项、国家自然科学基金</span>24<span style=";font-family:Microsoft Yahei">项、国家社会科学基金一般项目</span>1<span style=";font-family:Microsoft Yahei">项、教育部人文社科及博士点基金项目</span>6<span style=";font-family:Microsoft Yahei">项及其他省部级项目</span>14<span style=";font-family:Microsoft Yahei">项。先后获教育部高等学校科学研究优秀成果一等奖</span>1<span style=";font-family:Microsoft Yahei">项、二等奖</span>1<span style=";font-family:Microsoft Yahei">项，江苏省哲学社会科学优秀成果一等奖</span>1<span style=";font-family:Microsoft Yahei">项、二等奖</span>1<span style=";font-family:Microsoft Yahei">项、三等奖</span>1<span style=";font-family:Microsoft Yahei">项，江苏省科技进步一等奖</span>1<span style=";font-family:Microsoft Yahei">项、二等奖</span>1<span style=";font-family:Microsoft Yahei">项、三等奖</span>1<span style=";font-family:Microsoft Yahei">项，上海市科技进步二等奖</span>2<span style=";font-family:Microsoft Yahei">项、江苏高校哲学社会科学研究优秀成果三等奖</span>1<span style=";font-family:Microsoft Yahei">项、中国机械工业科学技术二等奖</span>2<span style=";font-family:Microsoft Yahei">项、三等奖</span>1<span style=";font-family:Microsoft Yahei">项。出版专著</span>3<span style=";font-family:Microsoft Yahei">部。自</span>2011<span style=";font-family:Microsoft Yahei">年以来，在</span>JCR<span style=";font-family:Microsoft Yahei">一区国际权威期刊</span>Applied Energy<span style=";font-family:Microsoft Yahei">、</span>Energy<span style=";font-family:Microsoft Yahei">、</span>Physical Review E<span style=";font-family:Microsoft Yahei">、</span>IEEE Transactions on Information Theory<span style="font-family:Microsoft Yahei">、</span> Energy Policy<span style=";font-family:Microsoft Yahei">等发表</span>SCI<span style=";font-family:Microsoft Yahei">、</span>SSCI<span style=";font-family:Microsoft Yahei">、</span>EI<span style=";font-family:Microsoft Yahei">检索论文</span>140<span style=";font-family:Microsoft Yahei">多篇，</span>CSSCI<span style=";font-family:Microsoft Yahei">检索</span>30<span style=";font-family:Microsoft Yahei">多篇。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <img alt="image037.jpg" src="/fos/Public/upload/image/20160327/1459062446113711.jpg" title="1459062446113711.jpg"/><img alt="image039.jpg" src="/fos/Public/upload/image/20160327/1459062470682527.jpg" title="1459062470682527.jpg"/>
</p>
<p style="text-indent:28px">
    <img alt="image047.jpg" src="/fos/Public/upload/image/20160327/1459062514107936.jpg" title="1459062514107936.jpg"/><img alt="image045.jpg" src="/fos/Public/upload/image/20160327/1459062541383800.jpg" title="1459062541383800.jpg"/>
</p>
<p style="text-indent:40px">
	<img alt="image041.jpg" src="/fos/Public/upload/image/20160327/1459062574236287.jpg" title="1459062574236287.jpg"/><img alt="image049.jpg" src="/fos/Public/upload/image/20160327/1459062592183530.jpg" title="1459062592183530.jpg"/>
	<img alt="image043.jpg" src="/fos/Public/upload/image/20160327/1459062627240246.jpg" title="1459062627240246.jpg"/>
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">1.</span></strong><strong><span style="font-size: 16px;font-family:Microsoft Yahei">获奖的主要科研成果</span></strong>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:25px">
            <td style="border: 1px solid windowtext; background: rgb(0, 204, 255) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <strong><span style="font-size:   16px;line-height:125%;font-family:Microsoft Yahei">编号</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 204, 255) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <strong><span style="font-size:   16px;line-height:125%;font-family:Microsoft Yahei">成果名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 2px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; background: rgb(0, 204, 255) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <strong><span style="font-size:   16px;line-height:125%;font-family:Microsoft Yahei">获奖时间及等级</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">1</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">能源碳排放系统分析</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center">
                    <span style="font-size:12px">2015</span><span style="font-size:12px;font-family:Microsoft Yahei">年教育部高等学校科学研究优秀成果</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">（人文社会科学）一等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">非线性生态种群动力学问题研究</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">年教育部高等学校科学研究优秀成果</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">（自然科学）二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">3</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">能源碳排放系统分析</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2014</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">年江苏省哲学社会科学优秀成果一等奖</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:25px">
            <td style="border: 1px solid windowtext; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">4</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">江苏沿江开发资源优化配置研究</span>
                </p>
            </td>
            <td style="border-width: 1px 2px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2005</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年江苏省哲学社会科学优秀成果二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">5</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">能源经济系统分析</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2007</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">年江苏省哲学社会科学优秀成果三等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">6</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">论我国可持续发展的能源战略选择</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2001</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">年江苏省哲学社会科学优秀成果三等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">7</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">基于有限理性的高碳与低碳能源经济系统动力学研究（英）</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">年江苏省高校第九届哲学社会科学研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">优秀成果三等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">8</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">耗散孤立波系统图案动力学时空混沌的研究</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2001</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">年</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">江苏省科技进步一等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">9</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">一类非线性色散波方程的解分析研究</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2014</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">年度江苏省科学技术二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">10</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">能源经济系统的非线性分析及可持续发展战略的研究</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2009</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年江苏省科技进步三等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">11</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">复杂网络系统的动力学分析与鲁棒控制</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2007</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年上海市科学技术二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">12</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">复杂系统的动力学行为分析及其应用</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2001</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年上海科技进步二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">13</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">西部能源供需体系与市场机制的可持续发展战略</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2011</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年中国机械工业科学技术二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">14</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">非线性分析下东西部能源经济系统可持续发展战略的选择</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2008</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年中国机械工业科学技术二等奖</span>
                </p>
            </td>
        </tr>
        <tr style=";height:25px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="37">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">15</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="313">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">能源碳排放系统演化及控制战略研究</span>
                </p>
            </td>
            <td style="border-width: medium 2px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="25" width="251">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2011</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">年中国机械工业科学技术三等奖</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    &nbsp;
</p>
<p style="margin-bottom:8px">
    <strong><span style="font-size:16px">2.</span></strong><strong><span style="font-size: 16px;font-family:Microsoft Yahei">承担的主要科研项目</span></strong>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:40px">
            <td style="border: 1px solid windowtext; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="33">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">序号</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="102">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">项目来源</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="294">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">项目名称</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="56">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">负责人</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="49">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">经费</span></strong>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(0, 176, 240) none repeat scroll 0% 0%; padding: 0px 1px;" height="40" width="81">
                <p style="text-align:center;line-height:125%">
                    <strong><span style=";line-height:   125%;font-family:Microsoft Yahei">起止时间</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>1<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">年国家社会科学基金重大项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">我国能源价格体系建设与能源发展战略转型研究（</span><span style="font-size:12px">12&amp;ZD062</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">80</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2015.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>2<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2006</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金重大研究计划</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">西部能源供需体系与市场机制的可持续发展战略（</span><span style="font-size:12px">90610031</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">30</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2007.1-2009.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>3<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金重大研究计划后续</span><span style="font-size:12px">1</span><span style="font-size:12px;font-family:Microsoft Yahei">年期项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">西部能源系统碳排放演化及控制战略研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">91010011</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">10</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2010.1-2010.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>4<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2002</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金重大研究计划</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">非线性分析下西部开发能源经济系统</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">可持续发展战略选择（</span><span style="font-size:   12px">90210004</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">25</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2003.1-2005.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>5<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2015</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">关于树指标随机过程极限理论的进一步研究</span>
                </p>
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">11571142</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">杨卫国</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">50</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2016.1-2019.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>6<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于演化博弈的智能电网供需动态耦合优化及政策分析</span><span style="font-size:12px">(71473108)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">孙</span><span style="font-size:12px;line-height:125%">&nbsp; </span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">62</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2015.1-2018.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>7<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">高余维分岔下的簇发振荡及其机理分析（</span><span style="font-size:12px">11472116</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">张正娣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">75</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2015.1-2018.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>8<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">煤电系统碳捕集碳封存下的碳排放及经济技术综合评价（</span><span style="font-size:12px;line-height:125%">51276081</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">70</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>9<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">基于计算实验的石油供需网络优化与动态调控研究（</span><span style="font-size:12px;line-height:125%">71273119</span><span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">孙</span><span style="font-size:12px;line-height:125%">&nbsp; </span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">58</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>10<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">低碳背景下我国能源开发利用及经济增长：</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">理论模型与政策（</span><span style="font-size:   12px">71273120</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">杨宏林</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">54</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>11<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于复杂网络的金融流动性风险的计算实验范式的研究</span><span style="font-size:12px">(71271103)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">姚洪兴</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">53</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>12<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">非光滑连续动力系统中的不同尺度效应</span>
                </p>
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">及其分岔机理研究（</span><span style="font-size:12px">11272135</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">张正娣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">68</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>13<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2011</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于有限理性分析的资源寡头博弈系统动力学研究（</span><span style="font-size:12px">71171098</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">丁占文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px">42</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2012.1-2015.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>14<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">推进低碳经济发展的节能减排体系研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">71073072</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">28</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>15<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于复杂系统理论的能源供需模型的理论方法</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">及政策分析（</span><span style="font-size:12px">71073071</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">孙</span><span style="font-size:12px">&nbsp; </span><span style="font-size:12px;font-family:Microsoft Yahei">梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">27</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>16<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">树指标随机过程的极限理论</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">11071104</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span><span style="font-size:12px"> </span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">杨卫国</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">28</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>17<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">非离散系统中的可计算性和计算复杂性研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">(61070231)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">卢殿臣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">31</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>18<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">非光滑振动系统的非常规分岔问题研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">(10972091)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">张正娣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">35</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.1-2012.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>19<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2008</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">系统范式及延迟脉冲金融投资演化均衡模型</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">的创新性研究（</span><span style="font-size:   12px">70871056</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">姚洪兴</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">21</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2009.1-2011.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>20<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2006</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">非线性波动方程分岔中的若干问题</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">(10602020)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">张正娣</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">15</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2007.1-2008.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>21<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2005</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">马尔可夫随机场及非齐次马氏链的极限理论</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">10571076</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">杨卫国</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">24</span><span style="font-size:12px;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2006.1-2008.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>22<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">低碳约束下多种能源供需相依网络的安全性</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">与防御策略研究（</span><span style="font-size:   12px">71403105</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">杜瑞瑾</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">23</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2015.1-2017.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>23<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">不同攻击策略下加权网络的网络鲁棒性研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">61403171</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">董高高</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">24</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2015.1-2017.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>24<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">复杂动力网络的有限时间不连续控制</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">及其在生物中的应用（</span><span style="font-size:   12px">11402100</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">蔡水明</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">25</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2015.1-2017.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>25<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于价格改革的能源利用效率与消费结构分析（</span><span style="font-size:12px">51306072</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">蒋书敏</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">25</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2014.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>26<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">区域碳循环演化分析下的排放效应及战略研究（</span><span style="font-size:12px">71303095</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">傅</span><span style="font-size:12px;line-height:125%">&nbsp; </span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">敏</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">20</span><span style="font-size:12px;line-height:125%;font-family:   Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2014.1-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>27<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金专项</span><span style="font-size:12px">-</span><span style="font-size:12px;font-family:Microsoft Yahei">数学天元基金</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">时滞动力网络分散型自适应间歇牵制控制研究（</span><span style="font-size:12px">11326193</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">蔡水明</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">3</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2014.1-2014.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>28<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">国家自然科学基金专项</span><span style="font-size:12px">-</span><span style="font-size:12px;font-family:Microsoft Yahei">数学天元基金</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">抛物型随机偏微分方程的数值计算方法</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">11226308</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">陈旭梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%;font-family:Microsoft Yahei">3</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2013.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>29<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">国家社会科学基金</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">非线性分析下西部开发东西联动能源区域经济</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">可持续发展研究</span><span style="font-size:   12px">(02JBY051)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:   12px;line-height:125%;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">3</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2002.1-2003.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>30<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2015</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部人文社科研究一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   Microsoft Yahei">基于复杂网络理论的金融系统网络模型及相关问题研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">(15YJAZH002)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">蔡国梁</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px">9</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2015.1-2017.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>31<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部人文社科研究一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于混沌动力学理论的金融系统模型理论方法</span>
                </p>
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">及对策研究（</span><span style="font-size:12px">12YJAZH002</span><span style="font-size:   12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px;font-family:Microsoft Yahei">蔡国梁</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:25px">
                    <span style="font-size:12px">9</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2012.1-2014.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>32<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部人文社科研究一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于复杂网络模型的我国能源供需体系可持续发展</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">战略研究</span><span style="font-size:12px">(09YJA90088)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">孙</span><span style="font-size:12px">&nbsp; </span><span style="font-size:12px;font-family:Microsoft Yahei">梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">7</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2010.1-2012.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>33<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部博士点基金资助项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center;text-autospace:none">
                    <span style="font-size:12px;font-family:Microsoft Yahei">中国能源资源开发、利用可持续发展战略研究（</span><span style="font-size:12px">20093227110012</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">6</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2010.1-2012.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>34<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2008</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部人文社科研究一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">长江三角洲地区节能减排环境保护一体化研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">08JA790058</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">7</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2009.1-2011.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>35<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2008</span><span style="font-size:12px;font-family:Microsoft Yahei">教育部人文社科研究一般项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">一类金融混沌系统的复杂动力学分析及混沌控制（</span><span style="font-size:12px">08JA790057</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">蔡国梁</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">7</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2009.1-2011.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>36<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2011</span><span style="font-size:12px;font-family:Microsoft Yahei">中国博士后科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">能源供需随机微分系统及其应用</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">(2011M501187)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">陈旭梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">5</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.9-2014.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>37<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">中国博士后科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">城市群突发水安全评价体系及综合应急管理研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px">—</span><span style="font-size:12px;font-family:Microsoft Yahei">以长三角区域为例</span><span style="font-size:   12px">(201003555)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">范兴华</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">3</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2011.1-2012.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>38<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2008</span><span style="font-size:12px;font-family:Microsoft Yahei">中国博士后科学基金面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">综合灾害风险管理系统的快慢型模型构建研究</span><span style="font-size:12px">(20080441071)</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">范兴华</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">3</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2008.12-2011.3</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <br/>
</p>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr class="firstRow" style=";height:57px">
            <td style="border: 1px solid windowtext; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px; word-break: break-all;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>1<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏高校哲学社会科学重点研究基地重大项目</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">推进低碳经济发展的节能减排理论及应用</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">2009JDXM007</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">25</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: 1px 1px 1px medium; border-style: solid solid solid none; border-color: windowtext windowtext windowtext -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>2<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏高校哲学社会科学重点研究基地重大项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">低碳经济下能源经济可持续发展战略研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">2009JDXM008</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">丁占文</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">17</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>3<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏高校哲学社会科学重点研究基地重大项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">新时期能源供需储备系统理论与政策研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">2009JDXM010</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">孙</span><span style="font-size:12px">&nbsp; </span><span style="font-size:12px;font-family:Microsoft Yahei">梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">17</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.1-2013.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>4<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">多种攻击策略下相互依赖加权网络的鲁棒性研究（</span><span style="font-size:12px">BK20130535</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">杜瑞瑾</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">20</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2014.7-2017.6</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>5<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省自然科学基金青年项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">切换不连通图上非线性多个体系统的一致性问题（</span><span style="font-size:12px">BK20130535</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">贾</span><span style="font-size:12px">&nbsp; </span><span style="font-size:12px;font-family:Microsoft Yahei">强</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">20</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.7-2016.6</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <a name="_Hlk407700445"></a> &nbsp;
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>6<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2014</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省高校自然科学研究面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">不同攻击策略下基于实际相依特性的相依网络鲁棒性研究（</span><span style="font-size:12px">14KJB120001</span><span style="font-size:12px;font-family:   Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">董高高</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">3</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%">2014.8-2016.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>7<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2013</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省高校自然科学研究面上项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">基于平均理论的快速时变多个体网络的一致性研究（</span><span style="font-size:12px">13KJB120001</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">贾</span><span style="font-size:12px">&nbsp; </span><span style="font-size:12px;font-family:Microsoft Yahei">强</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">3.2</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2013.8-2015.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>8<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2012</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省软科学基金项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">江苏能源系统碳排放演化及控制战略研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">BR2012027</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">傅</span><span style="font-size:12px;line-height:125%">&nbsp; </span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">敏</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">3</span><span style="font-size:12px;line-height:125%;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2012.1-2012.12</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>9<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省博士后科学基金项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">碳排放约束下能源供需结构调整的分析研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">1002075C</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">蒋书敏</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">3</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.10-2012.3</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>10<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2010</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省博士后科学基金项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">江苏省能源供需随机微分系统的研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">1002030C</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">陈旭梅</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">3</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(184, 204, 228) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center;line-height:125%">
                    <span style="font-size:12px;line-height:   125%">2010.9-2012.9</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color windowtext windowtext; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="33">
                <p style="margin-left:28px;line-height:125%;vertical-align:baseline">
                    <span style="font-size:12px;line-height:125%"><span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span>11<span style="font:9px &#39;Times New Roman&#39;">&nbsp; </span></span><span style="font-size:12px;line-height:125%">&nbsp;</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="102">
                <p style="text-align:center">
                    <span style="font-size:12px">2009</span><span style="font-size:12px;font-family:Microsoft Yahei">江苏省经信息委重点项目</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="294">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">新时期江苏化工行业经济可持续发展战略研究</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">（</span><span style="font-size:12px">JX0001</span><span style="font-size:12px;font-family:Microsoft Yahei">）</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:Microsoft Yahei">田立新</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="49">
                <p style="text-align:center">
                    <span style="font-size:12px">19.8</span><span style="font-size:12px;font-family:Microsoft Yahei">万</span>
                </p>
            </td>
            <td style="border-width: medium 1px 1px medium; border-style: none solid solid none; border-color: -moz-use-text-color windowtext windowtext -moz-use-text-color; background: rgb(146, 208, 80) none repeat scroll 0% 0%; padding: 0px 1px;" height="57" width="81">
                <p style="text-align:center">
                    <span style="font-size:12px">2009.11-2010.12</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    &nbsp;
</p>
<p>
    <strong><span style="font-size:19px;font-family:Microsoft Yahei">六．学术交流</span></strong>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">近年来，学科重视国际国内学术交流，先后与美国劳伦斯伯克利国家实验室、美国</span>Boston<span style=";font-family:Microsoft Yahei">大学、佐治亚理工学院、纽约城市大学、密歇根州立大学、加利福尼亚大学、德克萨斯大学泛美分校、新加坡国立大学、日本京都大学、国家发改委能源研究所、江苏省能源局、中科院科技政策与管理科学研究所、北京理工大学能源与环境政策研究中心、清华大学能源环境经济研究所、南京航空航天大学、中国矿业大学等，有着广泛的合作交流。举办了具有一定规模和影响的国际学术会议</span>6<span style=";font-family:Microsoft Yahei">次，国内学术会议</span>10<span style=";font-family:Microsoft Yahei">次，参加国际（</span>IAEE<span style=";font-family:Microsoft Yahei">亚洲大会、能源应用国际会议、国际数理方程学术会议、中日灾害风险管理与气候变化学术研讨会等）国内（能源资源开发利用战略研讨会、全国复杂网络会议、财经战略年会等）各类学术会议</span>200<span style=";font-family:Microsoft Yahei">多人次，邀请境外知名专家开展合作研究、讲学</span>80<span style=";font-family:Microsoft Yahei">多人次，派出国外学术交流</span> 30<span style=";font-family:Microsoft Yahei">多人次。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <img alt="image053.jpg" src="/fos/Public/upload/image/20160327/1459062879158572.jpg" title="1459062879158572.jpg"/>&nbsp;&nbsp;<img alt="image051.jpg" src="/fos/Public/upload/image/20160327/1459062900483375.jpg" title="1459062900483375.jpg"/>
</p>
<br/><br/>
<p style="text-indent:28px;line-height:27px">
    <img alt="image061.jpg" src="/fos/Public/upload/image/20160327/1459062928408844.jpg" title="1459062928408844.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;<img alt="image057.jpg" src="/fos/Public/upload/image/20160327/1459062969184477.jpg" title="1459062969184477.jpg"/>
</p>
<br/><br/>
<p style="text-indent:28px;line-height:27px">
	<img alt="image055.jpg" src="/fos/Public/upload/image/20160327/1459062983100061.jpg" title="1459062983100061.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;
    <img alt="image059.jpg" src="/fos/Public/upload/image/20160327/1459062994134237.jpg" title="1459062994134237.jpg"/>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:19px;font-family: Microsoft Yahei">七．决策咨询及成果应用</span></strong>
</p>
<p style="line-height:27px">
    <strong>&nbsp;&nbsp;&nbsp; </strong><span style=";font-family:Microsoft Yahei">本学科长期坚持理论与实践相结合，从系统的角度分析解决实际问题，积极服务经济建设与社会发展，为政府及企事业部门提供决策咨询，受到了好评。</span>
</p>
<p style="line-height:27px">
    <strong>1. </strong><strong><span style=";font-family:Microsoft Yahei">政策建议：</span></strong><span style=";font-family:Microsoft Yahei">《<strong>抓住有利时机推进成品油价格改革》被全国哲学社会科学规划办公室于</strong></span><strong>2015</strong><strong><span style=";font-family:Microsoft Yahei">年</span></strong><strong>2</strong><strong><span style=";font-family:Microsoft Yahei">月</span></strong><strong>17</strong><strong><span style=";font-family:Microsoft Yahei">日</span></strong><strong><span style=";font-family:Microsoft Yahei">刊登在</span></strong><strong>2015</strong><strong><span style=";font-family:Microsoft Yahei">年第</span></strong><strong>9</strong><strong><span style=";font-family:Microsoft Yahei">期《成果要报》上。</span></strong>
</p>
<p>
    <span style="font-size:14px;font-family:Microsoft Yahei">系统分析了当前我国成品油定价模式存在的突出问题，指出在我国经济发展进入新常</span>
</p>
<p>
    <br/>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">态，</span> <span style=";font-family:Microsoft Yahei">迫切要求推动成品油价格改革，围绕加快推进成品油价格改革提出了新的政策建议：将成品油价格调整周期缩短至</span>5<span style=";font-family:Microsoft Yahei">个工作日；完善价格调整方法并增进透明度，争取市场对成品油调价的理解支持；有序放开原油进口限制，扶持优秀民企快速成长。成品油价格改革基本完成后，适时建立成品油期货市场。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    &nbsp;
</p>
<p style="text-indent:28px;line-height:27px">
    <img alt="image063.jpg" src="/fos/Public/upload/image/20160327/1459063127873760.jpg" title="1459063127873760.jpg"/>
</p>
<p style="text-indent:28px;line-height:27px">
    <br/>
</p>
<p style="margin-top:8px;line-height: 27px">
    <strong><span style="font-size:16px">2.</span></strong><strong><span style="font-size:16px"> 2</span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">份政策建议，被江苏省省级领导批示并被江苏省能源局煤电处采纳使用。</span></strong>
</p>
<p style="text-indent:21px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">（</span>1<span style=";font-family:Microsoft Yahei">）<strong>构建江苏燃气发电电价体系的对策建议：</strong>江苏应及时对燃气发电政策进行战略调整，形成</span>“<span style=";font-family:Microsoft Yahei">多方承担、价格联动</span>”<span style=";font-family:Microsoft Yahei">的燃气电价体系</span>,<span style=";font-family:Microsoft Yahei">这体现在天然气价格与天然气发电的上网电价联动、天然气上网电价与销售电价联动、电网销售电价与煤电上网电价联动、天然气发电价格与蒸汽价格联动、天然气发电价格联动的基点与启动点这五方面。建议：对各涉及方加强宣贯解释；建立清洁能源基金附加统筹；创新交易模式以寻求更多气源；优化燃气发电的建设布局；以长期规划逐步提升天然气发电比例。</span>
</p>
<p style="text-indent:21px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">《构建江苏燃气发电电价体系的对策建议》于</span>2014<span style=";font-family:Microsoft Yahei">年</span>8<span style=";font-family:Microsoft Yahei">月</span>21<span style=";font-family:Microsoft Yahei">日</span><span style=";font-family:Microsoft Yahei">得到江苏省委常委、常务副省长李云峰批示：田立新教授负责的该课题阶段研究成果较有深度，就构建燃气发电价格体系所提出的“多方承担、价格联动”原则和相关对策建议很有参考价值。请省物价局、省能源局认真阅研，在推进天然气发电成本疏导化解工作中对照建议予以采纳。</span>
</p>
<p style="text-indent:28px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">该成果提出的江苏燃气发电价格体系“多方承担、价格联动”的原则和构建燃气电价体系的</span>5<span style=";font-family:Microsoft Yahei">点对策建议，已被江苏省能源局煤电处采纳到江苏省应对新一轮天然气价格调整中省天然气电价结构和电价水平的战略对策中。</span>
</p>
<p style="text-indent:21px;line-height:27px">
    <img alt="image065.jpg" src="/fos/Public/upload/image/20160327/1459063152977294.jpg" title="1459063152977294.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;<img alt="image067.jpg" src="/fos/Public/upload/image/20160327/1459063170807749.jpg" title="1459063170807749.jpg"/>
</p>
<p style="text-indent:21px;line-height:27px">
    &nbsp;
</p>

<p style="text-indent:21px;line-height:27px">
    &nbsp;
</p>
<p style="text-indent:21px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">（</span>2<span style=";font-family:Microsoft Yahei">）<strong>推进能源发电与电价市场化改革的对策建议：</strong>针对当前电力价格体系中存在的一系列问题，以及能源发电和电价体系中的不合理部分，提出江苏省电价市场改革的政策建议：上网电价联动，转移非煤发电企业补贴的发放主体；优化发电布局，推进坚强智能电网快速发展；试点输配分离，检验配电环节市场化改革成效；调整需求响应，进一步拉开峰谷电价的差距；增加投资信心，适度向省属发电集团倾斜。</span>
</p>
<p style="text-indent:21px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">《推进能源发电与电价市场化改革的对策建议》于2014年8月13日得到江苏省人大常务副主任张卫国批示：该对策建议思路新颖，请省能源局阅研。</span>
</p>
<p style="text-indent:21px;line-height:27px">
    <span style=";font-family:Microsoft Yahei">该成果关于“上网电价联动、优化发电布局、调整需求响应”等已被江苏省能源局煤电处采纳到正在草拟的江苏省“十三五”关于能源供需安全发展规划中。</span>
</p>
<p style="text-indent:24px;line-height:27px">
    <img alt="image071.jpg" src="/fos/Public/upload/image/20160327/1459063192259266.jpg" title="1459063192259266.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;<img alt="image069.jpg" src="/fos/Public/upload/image/20160327/1459063218388533.jpg" title="1459063218388533.jpg"/>
</p>
<p>
    <strong><span style="font-size:19px">&nbsp;</span></strong>
</p>

<p style="line-height:27px">
    <strong><span style="font-size:16px">&nbsp;</span></strong>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:16px">3.</span></strong><strong><span style="font-size:16px;font-family:Microsoft Yahei">研究成果推广应用</span></strong>
</p>
<p>
    <strong><span style="font-size:16px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">&nbsp; </span></strong><span style="font-size: 16px;font-family:&#39;Times New Roman&#39;,&#39;serif&#39;">&nbsp;&nbsp;</span><span style="font-size:14px;font-family:Microsoft Yahei">研究成果中的西部能源供需体系理论及发展调控战略体系、能源约束下的均衡经济增</span>
    <span style=";font-family:Microsoft Yahei">长理论、能源资源的物流理论等应用于</span><span style=";font-family:Microsoft Yahei;letter-spacing:-1px">江苏省中小企业局、南通市经济贸易委员会、镇江市发展和改革委员会等</span><span style=";font-family:Microsoft Yahei">政府部门及中石化镇江分公司、道达尔润滑油（中国）有限公司、新疆伊宁县发展和改革委员会、国电泰州发电有限公司、南通天生港发电有限公司、龙源（如东）风力发电有限公司、国电大渡河流域水电开发有限公司、中国华电集团公司四川公司</span><span style=";font-family:Microsoft Yahei;letter-spacing:-1px">等</span><span style=";font-family:Microsoft Yahei">企事业单位，取得了显著社会经济效益。</span>
</p>
<p style="line-height:27px">
    &nbsp;
</p>
<p>
    &nbsp;
</p>
<p>
    &nbsp;
</p>
				</div>

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