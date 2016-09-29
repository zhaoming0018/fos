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
	<base target="_blank">
<title>科研项目</title>
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
					<div class="navTitle">科学研究</div><!-- 数据库读出数据 -->
					<ul>
						<li><a href="__APP__/Kyjg/kyjg">科研机构</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Index/kyxm">科研项目</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Index/kycg">科研成果</a></li><!-- 数据库读出 -->
					</ul>
				</div><!-- end class="navList" -->
			</div><!-- end navside -->
		</div><!-- end class="w2" -->
		
		<div class="w10 pull-left">
			<div class="article">
				<div class="articleTitle">
					<div>科研项目</div>
					<hr/>
				</div>
				<div class="articleBody w9 center-block">
<p style="text-align: center;">
    <span style="font-size:16px;font-weight:bold;">国家级科研项目</span>
</p>

    <span ><strong><span style="font-size: 16px;">2015</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span >新型双组份Camassa-Holm方程的等谱问题及适定性研究, 11501253, 陈文霞</span>
        
    </li>
    <li>
        
            <span >限制的丢番图逼近与分形, 11501255, 孙钰</span>
        
    </li>
    <li>
        
            <span >含相互作用的拓扑量子态的拓扑不变量及对称性分类的研究,11504141,蓝元培</span>
        
    </li>
    <li>
        
            <span >利用氟辅助制备氮含量和掺杂形式可调节的石墨烯并调控其磁性,11504142,刘圆</span>
        
    </li>
    <li>
        
            <span >低维自旋轨道耦合费米气体的量子蒙特卡罗研究,11504143,杨孝森</span>
        
    </li>
    <li>
        
            <span >全空间上几类椭圆型方程中若干问题的研究,11571140,王俊</span>
        
    </li>
    <li>
        
            <span >可压缩流体力学中的偏微分方程,11571141,许刚</span>
        
    </li>
    <li>
        
            <span >关于树指标随机过程极限理论的进一步研究,11571142,杨卫国</span>
        
    </li>
    <li>
        
            <span >条件分拆函数的同余性质和组合性质,11571143,夏先伟</span>
        
    </li>
    <li>
        
            <span >基于贝塞尔曲线曲面的汽车内腔喷涂机器人轨迹优化研究, 51505193, 汤养</span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2014</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">带约束条件的整数分拆和mock模形式的算术性质，11401260，姚祥妹 </span>
        
    </li>
    <li>
        
            <span style="">复杂动力网络的有限时间不连续控制及其在生物中的应用，11402100，蔡水明 </span>
        
    </li>
    <li>
        
            <span style="">基于核式白细胞瞬态双通道散射识别方法，11404145，卜敏 </span>
        
    </li>
    <li>
        
            <span style="">基于声学超材料的声波非对称传输、聚焦和调控新机制及其应用研究，11404147，孙宏祥 </span>
        
    </li>
    <li>
        
            <span style="">不同攻击策略下加权网络的网络鲁棒性研究，61403171，董高高 </span>
        
    </li>
    <li>
        
            <span style="">低碳约束下多种能源供需相依网络的安全性与防御策略研究，71403105，杜瑞瑾 </span>
        
    </li>
    <li>
        
            <span style="">高余维分岔下的簇发振荡及其机理分析，11472116，张正娣 </span>
        
    </li>
    <li>
        
            <span style="">神经细胞放电动力学行为的全域光相位成像分析方法与技术，11474134，季颖 </span>
        
    </li>
    <li>
        
            <span style="">基于演化博弈的智能电网供需动态耦合优化及政策分析，71473108，孙梅 </span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2013</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">非光滑连续系统的簇发振荡模式及其分岔机理研究，11302086，季颖 </span>
        
    </li>
    <li>
        
            <span style="">丝网印刷碳纳米管阴极的模型构建及其场发射性能和力学行为研究，11304125，尚学府 </span>
        
    </li>
    <li>
        
            <span style="">量子光学表象与变换理论及其在光学相关器中的应用研究，11304126，吕翠红 </span>
        
    </li>
    <li>
        
            <span style="">高阶Camassa-Holm方程及相关问题研究，11371175，丁丹平 </span>
        
    </li>
    <li>
        
            <span style="">正交相位显微下的有核细胞亚表面3D特征识别方法与技术，11374130，王亚伟 </span>
        
    </li>
    <li>
        
            <span style="">基于价格改革的能源利用效率与消费结构分析，51306072，蒋书敏 </span>
        
    </li>
    <li>
        
            <span style="">区域碳循环演化分析下的排放效应及战略研究，71303095，傅敏 </span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2012</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">具有临界指数增长的椭圆型方程若干问题的研究, A010601, 王俊 </span>
        
    </li>
    <li>
        
            <span style="">流体力学方程的适定性及其相关问题, A0108, 张平正 </span>
        
    </li>
    <li>
        
            <span style="">斜纹夜蛾耐药性机制的演化及其种群控制策略, A011403, 张弘 </span>
        
    </li>
    <li>
        
            <span style="">基于序列比率的组合性质研究, A011603, 夏先伟 </span>
        
    </li>
    <li>
        
            <span style="">非光滑连续动力系统中的不同尺度效应及其分岔机理研究, A020202, 张正娣 </span>
        
    </li>
    <li>
        
            <span style="">煤电系统碳捕集碳封存下的碳排放及经济技术综合评价, E060103, 田立新 </span>
        
    </li>
    <li>
        
            <span style="">基于计算实验的石油供需网络优化与动态调控研究, G031203, 孙梅 </span>
        
    </li>
    <li>
        
            <span style="">低碳背景下我国能源开发利用及经济增长:理论模型与政策, G031203, 杨宏林 </span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2011</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">含参数向量场的极限环与同、异宿轨研究, A0107, 吴玉海 </span>
        
    </li>
    <li>
        
            <span style="">可压缩流体中的混合型偏微分方程及其相关问题, A010801, 许 刚 </span>
        
    </li>
    <li>
        
            <span style="">典型非线性浅水波方程的低正则解散射及渐进性研究, A010902, 田立新 </span>
        
    </li>
    <li>
        
            <span style="">光纤通信中光孤子的稳定控制和光纤怪波的不稳定控制, A0113, 殷久利 </span>
        
    </li>
    <li>
        
            <span style="">斜纹夜蛾的分龄治理的数学描述和模型研究, A011403, 张 弘 </span>
        
    </li>
    <li>
        
            <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;">Rogers-Ramanujan &nbsp; &nbsp; &nbsp;函数及相关 theta 函数恒等式, A011603, 夏先伟 </span>
        
    </li>
    <li>
        
            <span style="">设计基于机电阻抗的快速自适应健康监测系统, A020316, 许伯强 </span>
        
    </li>
    <li>
        
            <span style="">贵金属纳米复合结构光学共振增强机理及应用研究, A040405, 吴大健 </span>
        
    </li>
    <li>
        
            <span style="">基于有限理性分析的资源寡头博弈系统动力学研究, G0105, 丁占文 </span>
        
    </li>
    <li>
        
            <span style="">多项流中跨尺度气泡群多特征参量瞬态光检测理论与关键技术, 21146004, 王亚伟 </span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2010</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">余分裂李代数等若干问题的研究, A010202, 夏利猛 </span>
        
    </li>
    <li>
        
            <span style="">两类非线性方程中新型孤子的稳定性分析, A010801, 殷久利 </span>
        
    </li>
    <li>
        
            <span style="">流体力学方程组的若干数学问题, A010801, 桂贵龙 </span>
        
    </li>
    <li>
        
            <span style="">树指标随机过程的极限理论, A011004, 杨卫国 </span>
        
    </li>
    <li>
        
            <span style="">慢变扰动下混沌生态系统的仿生智能控制方法, A011004, 李医民 </span>
        
    </li>
    <li>
        
            <span style="">含致密天体X射线双星的演化, A030304, 戴海浪 </span>
        
    </li>
    <li>
        
            <span style="">动静组合载荷下岩石断裂表面形貌的多尺度分析, E090701, 冯志刚 </span>
        
    </li>
    <li>
        
            <span style="">非离散系统中的可计算性和计算复杂性研究, F020101, 卢殿臣 </span>
        
    </li>
    <li>
        
            <span style="">西部能源系统碳排放演化及控制战略研究, G031203, 田立新 </span>
        
    </li>
    <li>
        
            <span style="">推进低碳经济发展的节能减排体系研究, G031203, 田立新 </span>
        
    </li>
    <li>
        
            <span style="">基于复杂系统理论的能源供需模型的理论方法及政策分析, G031203, 孙 梅 </span>
        
    </li>
</ul>

    <span ><strong><span style="font-size: 16px;">2009</span></strong><strong><span style="font-size: 16px;">年</span></strong><strong><span style="font-size: 16px;"></span></strong><strong><span style="font-size: 16px;"></span></strong></span>

<ul type="disc" class=" list-paddingleft-2">
    <li>
        
            <span style="">非光滑振动系统的非常规分岔问题研究, A020202, 张正娣 </span>
        
    </li>
    <li>
        
            <span style="">基于分子发光原理的光弹性涂层测量方法, A020316, 花世群 </span>
        
    </li>
    <li>
        
            <span style="">声隐身斗篷多重散射机理及其应用研究, A040503, 吴大健</span>
        
        <p style="text-align: center;margin-top:10px;">
            <span style="font-size:16px;font-weight:bold;">省级科研项目</span>
        <p>
    </li>
    <li>
        
            <span style="">基于锁模激光器的光纤怪波激发机理及其保密通信研究，江苏省面上项目（BK20151335），殷久利</span>
        
    </li>
    <li>
        
            <span style="">斜纹夜蛾抗药性形成和发展的数学描述和模型研究(教育部留学回国启动)，张弘 </span>
        
    </li>
    <li>
        
            <span style="">基于量子光学表象与变换理论的光学相关器研究，省自然基金(BK20130532)，吕翠红 </span>
        
    </li>
    <li>
        
            <span style="">切换不连通图上非线性多个体系统的一致性问题，省自然基金(BK20130535)，贾强 </span>
        
    </li>
    <li>
        
            <span style="">基于平均理论的快速时变多个体网络的一致性研究，江苏省高校自然研究面上项目(13KJB120001)，贾强 </span>
        
    </li>
    <li>
        
            <span style="">量子光学变换及其在光学相关器中的应用研究，江苏省高校自然研究面上项目(13KJB140003)，吕翠红 </span>
        
    </li>
    <li>
        
            <span style="">非对称线性结构中声整流效应的优化及调控，重点实验室开放课题(SKLA201308)，孙宏祥 </span>
        
    </li>
    <li>
        
            <span style="">芯片表面的突破衍射极限的纳米尺度中性原子的囚禁技术, 省自然科学基金(BK2011462), 王正岭 </span>
        
    </li>
    <li>
        
            <span style="">非光滑系统中的分岔及簇发机制研究, 省教育厅科学基金(11KJB130001), 季颖 </span>
        
    </li>
    <li>
        
            <span style="">使用虚拟光学系统模拟细胞微结构的散射相位分布的研究, 江苏省博士后科研资助计划(1101113C), 尚学府 </span>
        
    </li>
    <li>
        
            <span style="">基于激光超声和压电双向耦合效应对薄膜性能检测的研究, 省教育厅高校重大项目(10KJA140006), 许伯强 </span>
        
    </li>
    <li>
        
            <span style="">X射线双星的演化, 省自然科学基金(BK2010338), 戴海浪 </span>
        
    </li>
    <li>
        
            <span style="">多体细胞双光路Hilbert瞬态光全息检测理论及其关键技术, 省教育厅高校重大项目(09KJA140001), 王亚伟 </span>
        
    </li>
    <li>
        
            <span style="">量子点飞秒激光诱导光栅及其微纳尺度加工新技术的基础研究, 江苏省博士后科研资助计划(2009), 王正岭</span>
        
    </li>
    <li>
        
            <span >基于数字相位分布的生物细胞瞬态识别光学检测方法, 省自然科学基金(BK2008230), 王亚伟</span>
        
    </li>
</ul>

    <br/>
				
    			</div>
			</div><!-- end class="article" -->
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