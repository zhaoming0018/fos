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

<title>物理电子学硕士点</title>

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

					<div>物理电子学</div>

					<hr/>

				</div>

				<div class="articleBody w9 center-block">

					<h5 class="h5Title">简介</h5>

					<p>本学科现有博士生导师3人（外聘兼职2人）,教授11人（外聘兼职5人，其中有德国Jena大学光学专家Frank Wyrowsiki教授），副教授16人，5人具有博士学位。本专业培养德、智、体全面发展的具备从事光电信息处理及其检测技术、光学传感器技术，光与物质相互作用理论及其应用技术，光电子材料及器件研发技术的高级研究人员或高校教师。</p> 

					<p>学科带头人：王亚伟教授，博导</p>

					<h5 class="h5Title">研究方向</h5>

					<p>本学科具有以下五个研究方向：</p>

					<p>1）光信息科学及其检测技术</p>

					<p>2）光电子技术</p>

					<p>3）光声光热效应及诊断技术、多物理场耦合及多尺度计算</p>

					<p>4）光电子材料及器件</p>

					<p>5）光电子通信</p>

					<h5 class="h5Title">课程介绍</h5>

					<p>本专业开设学位课及基础课如下：</p>

					<p>1）自然辩证法概论</p>

					<p>2）科学社会主义理论与实践</p>

					<p>3）英语</p>

					<p>4）矩阵论</p>

					<p>5）数理方程</p>

					<p>6）数值分析</p>

					<p>7）工程光学</p>

					<p>8）高等量子力学</p>

					<h5 class="h5Title">研究生发表论文情况</h5>

					<p>本专业研究生在自己的不懈努力与导师的悉心指导下，每年在国内外的核心学术期刊上发表论文10多篇。</p>

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