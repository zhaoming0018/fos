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
	
<title>应用系统分析研究所</title>
<style>
table{
border:1px solid #333;
}
table tr td{
border:1px solid #333;
}
</style>
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
					<div class="navTitle">科研机构</div>
					<ul>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Kyjg/show/id/<?php echo ($vo["institution_id"]); ?>"><?php echo ($vo["institution_name"]); ?></a></li><!-- 数据库读出 --><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--因为数据超出富文本编辑限制，应用系统分析研究所采用静态页面-->
							<li><a href="__APP__/Kyjg/yyxtfx">应用系统分析研究所</a></li>
						<!-- 这个地方在数据库中读出科研机构的类目 -->
					</ul>
				</div><!-- end class="navList" -->
			</div><!-- end navside -->
		</div><!-- end class="w2" -->
		
		<div class="w10 pull-left">
			<div class="article">
				<div class="articleTitle">
					<div>应用系统分析研究所</div>
					<hr/>
				</div>
				<div class="articleBody w9 center-block">
<p style="text-indent: 0px; text-align: center;">
    <span style="text-indent: 32px; font-size: 29px; line-height: 43.5px;"><span style="font-family:宋体"><strong>&nbsp;</strong></span></span><span style="line-height: 27px; font-family: 微软雅黑, sans-serif; font-size: 12px; text-indent: 32px;">机构依托江苏省一级重点学科控制科学与工程（系统工程）和数学学科，以江苏省教育厅批准成立的首批江苏高校哲学社会科学重点研究基地：江苏大学能源发展与环境保护战略研究中心和成立于1997年的江苏大学非线性科学研究中心为平台开展研究。机构共有专兼职人员共26名，其中外籍专家1名、教授6名、副教授11名，90%以上人员具有博士学位，具有海外背景的人员19人；拥有包括国家百千万人才在内的高水平学术优秀人才10人。机构成员长期从事能源经济系统工程及能源发展综合评价的研究，具有现代系统工程、能源经济、系统科学、能源系统评价分析、复杂系统分析及决策、大数据、云计算、应用数学</span>
</p>
<p style="text-indent: 0px;">
    <span style="line-height: 27px; font-family: 微软雅黑, sans-serif; font-size: 12px; text-indent: 32px;">大系统复杂建模与控制等方面的专门人才，适合做跨学科的交叉研究，具有鲜明的特色和突出的优势。</span>
</p>
<p style="text-indent:32px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">近5年机构成员研究成果获得包括教育部高等学校科学研究优秀成果一等奖在内的各类科学技术和哲学社会科学奖项共7项。机构成员在Physical Review Letter（影响因子7.512）、Applied Energy、Energy等国际顶尖期刊上发表SCI检索论文300多篇。承担并顺利完成了江苏大学首个国家社会科学基金重大项目，正在承担和已完成国家自然科学基金项目32项。成果应用于服务社会，提供决策咨询：关于能源价格的政策建议被全国哲学社会科学规划办公室编发《成果要报》1篇；2篇关于燃气发电和电价市场化改革的研究报告获得江苏省委常委、常务副省长李云峰及江苏省人大常务副主任张卫国批示，并被江苏省能源局煤电处采纳。</span><span style="font-family: 微软雅黑, sans-serif; font-size: 12px;">&nbsp;</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">一.组织机构</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">机构共有专兼职人员26人，其中专职人员12人，兼职人员14人。</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">所&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 长：孙梅</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">常务副所长：董高高&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 副所长：王俊</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">秘&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 书：肖江</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）能源复杂系统分析研究室：负责人孙梅</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">成员：田立新、孙梅、蒋书敏、杜瑞瑾、肖江</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）<span style="letter-spacing:0">非线性分析理论及其应用</span>研究室：负责人王俊</span>
</p>
<p style="line-height:27px">
    <span style="font-size: 12px; font-family: 微软雅黑, sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px; font-family: 微软雅黑, sans-serif;">成员：王俊、许刚、夏利猛、张平正、吴玉海、陈翠、陈文霞、沈彩霞、朱茂春、夏先伟、姚祥妹</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（3）复杂网络理论及其应用研究室：负责人董高高</span>
</p>
<p style="text-indent:30px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">成员：姚洪兴、董高高、Lippolis、贾强、张弘</span>
</p>
<p style="line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（4）<span style="letter-spacing:0">信息系统理论及其应用</span>研究室：负责人杨卫国</span>
</p>
<p style="text-indent:30px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">成员：杨卫国、卢殿臣、殷久利、章志华、赵丛然</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">二.科研获奖</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">近5年机构成员研究成果获得包括教育部高等学校科学研究优秀成果一等奖在内的各类科学技术和哲学社会科学奖项共7项。成果2015年获教育部第七届高等学校科学研究优秀成果（社会科学）一等奖（已公示）1项，2014年获江苏省第十三届哲学社会科学优秀成果一等奖1项，取得了机构成果高层次上获奖的重大突破。研究成果2014年获江苏省科技进步二等奖1项；2013年获教育部高等学校科学研究优秀成果（自然科学）二等奖1项；2011年、2013年分别获中国机械工业科学技术二等奖1项、三等奖1项。</span>
</p>
<table cellspacing="0" cellpadding="0" width="646">
    <tbody>
        <tr style=";page-break-inside:avoid;height:64px" class="firstRow">
            <td width="30" style="border-color: windowtext; border-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">序号</span>
                </p>
            </td>
            <td width="148" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">成果</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">名称</span>
                </p>
            </td>
            <td width="96" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">获奖的机构</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">人员</span>
                </p>
            </td>
            <td width="120" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">奖项名称</span>
                </p>
            </td>
            <td width="60" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">奖励等级</span>
                </p>
            </td>
            <td width="72" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">授奖</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">部门</span>
                </p>
            </td>
            <td width="60" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">获奖</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">证书号</span>
                </p>
            </td>
            <td width="60" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">获奖</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">时间</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:64px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="margin-top:0;margin-bottom:   0;margin-bottom:0">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">能源碳排放系统分析</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），孙梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），</span>
                </p>
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">肖江（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">教育部第七届高等学校科学研究优秀成果奖（人文社会科学）</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">一等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">教育部</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">教科社证字(2015)第023号</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2015.10</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:64px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">一类非线性色散波方程的解分析研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），张平正（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），殷久利（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">6</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），卢殿臣（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">7</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2014</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">年度江苏省科学技术奖</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">二等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">江苏省人民政府</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2014-2-5</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="64">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2015.1</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:56px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:   0;margin-bottom:0">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">能源碳排放系统分析</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），孙梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），</span>
                </p>
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">肖江（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">江苏省第十三届哲学社会科学优秀成果奖</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">一等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">江苏省人民政府</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">130047</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2014.10</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:56px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">4</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:   0;margin-bottom:0">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">非线性生态种群动力学问题研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">张弘（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">6</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2013</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">年度</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">教育部</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">高等学校科学研究优秀成果奖（自然科学）</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">二等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">教育部</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2013-109</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2014</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:56px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">5</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:   0;margin-bottom:0;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">能源系统碳排放演化分析及控制战略研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center;vertical-align:baseline">
                    <span style="font-size:   12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），孙梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），</span>
                </p>
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center;vertical-align:baseline">
                    <span style="font-size:   12px;font-family:&#39;微软雅黑&#39;,sans-serif">肖江（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">4</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">中国机械工业科学技术奖</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">三等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">中国机械工业联合会</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size: 12px;font-family: 微软雅黑, sans-serif">R1313017</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2013.10</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:56px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">6</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:   0;margin-bottom:0;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">西部能源供需体系与市场机制的可持续发展战略</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="margin-top:0;margin-bottom:0;margin-bottom:0;text-align:center;vertical-align:baseline">
                    <span style="font-size:   12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），孙梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），蒋书敏（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">6</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），肖江（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">7</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），董高高（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">8</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">中国机械工业科学技术奖</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">二等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">中国机械工业联合会</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size: 12px;font-family: 微软雅黑, sans-serif">R1113019</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2011.10</span>
                </p>
            </td>
        </tr>
        <tr style=";page-break-inside:avoid;height:56px">
            <td width="30" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">7</span>
                </p>
            </td>
            <td width="148" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">能源经济系统的非线性分析及可持续发展战略的研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），孙梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">），杨卫国（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">）</span>
                </p>
            </td>
            <td width="120" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2009</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">年度江苏省科学技术奖</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">三等奖</span>
                </p>
            </td>
            <td width="72" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">江苏省人民政府</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2009-J-3-60</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="56">
                <p style="text-align:center;vertical-align:baseline">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2010.1</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">&nbsp;</span></strong>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">三.专著论文及决策咨询</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">机构成员近5年出版专著3部，在包括国外顶尖杂志Physical Review Letter 、Math.Ann.、 J. Differential Equations、Physical Review E、Applied Energy、Energy Policy、Energy等国内外期刊论文400多篇，其中SCI检索300多篇，SSCI检索15篇，CSSCI检索34篇，多篇高质量科研论文受到了国内外专家学者的关注和好评。特聘教授Domenico Lippolis在国际顶尖杂志Physical Review Letter（影响因子7.512）上发表论文1篇。王俊副教授于2012 年发表在Journal of Differential Equations 的文章总引用77次（Google Scholar 数据），被该杂志评为近5 年高引用文章（共25 篇，本文排名15），同时，也是ESI 基本科学指标数据库高引用论文。</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1.</span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">专著</span></strong>
</p>
<p style="text-indent:12px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）田立新，孙梅，肖江，方国昌，能源碳排放系统分析，47.5万字，科学出版社，2013.</span>
</p>
<p style="text-indent:12px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）田立新，孙梅，能源供需系统分析，29.4万字，科学出版社，2011.</span>
</p>
<p style="text-indent:12px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（3）郭柏灵，田立新，闫振亚，凌黎明，怪波及其数学理论，39.7万字，浙江科学技术出版社，2015</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2.</span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">代表性论文</span></strong>
</p>




<table cellspacing="0" cellpadding="0" width="591">
    <tbody>
        <tr style=";height:53px" class="firstRow">
            <td width="31" style="border-color: windowtext; border-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">序号</span>
                </p>
            </td>
            <td width="269" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">论文名称</span>
                </p>
            </td>
            <td width="60" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">第一或通讯作者</span>
                </p>
            </td>
            <td width="132" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">发表刊物名称</span>
                </p>
            </td>
            <td width="48" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">发表时间</span>
                </p>
            </td>
            <td width="51" style="border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-style: none; padding: 0px 7px;" height="53">
                <p>
                    <span style="font-family:宋体">论文</span>
                </p>
                <p>
                    <span style="font-family:宋体">影响</span>
                </p>
            </td>
        </tr>
        <tr style=";height:53px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="53">
                <p>
                    1
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    HowWell Can One Resolve the State Space &nbsp; of a Chaotic Map?
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    D.Lippolis<span style="font-family:   宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    Physical Review Letter
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    2010
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="53">
                <p>
                    SCI
                </p>
                <p>
                    <span style="font-family:宋体">高影响因子</span>7.512
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    2
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">强不定问题的变分方法与同宿轨问题</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">王俊（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013<span style="font-family:宋体">年全国百篇优秀博士论文提名，</span>
                </p>
                <p>
                    2012<span style="font-family:宋体">年江苏省优秀博士论文</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2012
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">博士论文</span>
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    3
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Multiplicity and concentration of &nbsp; positive solutions for a Kirchhoff type problem with critical growth
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">王俊（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Journal Differential Equations
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2012
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI<span style="font-family:宋体">，</span>
                </p>
                <p>
                    ESI<span style="font-family:宋体">高被引论文</span>
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    4
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Existence and concentration of positive &nbsp; ground state solutions for semilinear Schrodinger-Poisson systems in R^3
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">王俊（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Calc. Var. Partial Differential Equations
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    5
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Positive solutions for a class of &nbsp; quasilinear problems with critical growth in R^N
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">王俊（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Proc. Roy. Soc. Edinburgh Sect. A
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    6
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    The strong law of large numbers and the &nbsp; entropy ergodic theorem for nonhomogeneous bifurcating Markov chains indexed &nbsp; by a binary tree
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">杨卫国</span>
                </p>
                <p>
                    <span style="font-family:宋体">（通讯）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    IEEE Transactions on Information Theory
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    EI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    7
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    The generalized entropy ergodic theorem &nbsp; for nonhomogeneous Markov
                </p>
                <p>
                    chains
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">杨卫国</span>
                </p>
                <p>
                    <span style="font-family:宋体">（通讯）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Journal of Theoretical Probability
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    8
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    A class of strong deviation theorems for &nbsp; the random fields associated with
                </p>
                <p>
                    nonhomogeneous Markov chains indexed by a &nbsp; Bethe tree
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">杨卫国</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Stochastic Analysis and Applications
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2012
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    9
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    An evolutionary vaccination game in the &nbsp; modified activity &nbsp;&nbsp;driven network by &nbsp; considering the closeness
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">孙梅</span>
                </p>
                <p>
                    (<span style="font-family:宋体">通讯</span>)
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Physical A
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2016
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    &nbsp;
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    10
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Features and evolution of international &nbsp; fossil energy trade relationships: A weighted multilayer network analysis
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">孙梅</span>
                </p>
                <p>
                    (<span style="font-family:宋体">通讯</span>)
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Applied Energy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    11
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Quantifying China&#39;s oil import risks and &nbsp; the impact on the national economy
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">孙梅</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Energy Policy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    12
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Optimization of China&#39;s energy structure &nbsp; based on portfolio theory
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">孙梅</span>
                </p>
                <p>
                    (<span style="font-family:宋体">通讯</span>)
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Energy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    13
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    A delayed epidemic model with &nbsp; stage-structure and pulses for pest management strategy
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">张弘</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Nonlinear Analysis-Real World &nbsp; Applications
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2008
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    ESI<span style="font-family:宋体">高被引论文</span>
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    14
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    The influence of the multiplicity of infection &nbsp; upon the dynamics of a crop-pest-pathogen model with defence mechanisms
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">张弘</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Applied Mathematical Modelling
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    15
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    The global properties of an age-dependent &nbsp; SI model involving pathogenic virus release and defence mechanisms for pests
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">张弘（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Mathematical And Computer Modelling
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2011
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    16
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    On the index-conjecture on length four &nbsp; minimal zero-sum sequences
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">夏利猛</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    International Journal of Number Theory
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    17
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Low-regularity solutions of the periodic &nbsp; modified two-component Camassa-Holm equation
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">夏利猛</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Journal of Mathematical Physics
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    18
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Leader following of nonlinear agents with &nbsp; switching connective network and coupling delay
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">贾强（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    IEEE Transactions on Circuits and &nbsp; Systems-Part I: Regular Papers
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2011
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    19
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Consensus of nonlinear agents in directed &nbsp; network with switching topology and communication delay
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">贾强（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    IEEE Transactions on Circuits and &nbsp; Systems-Part I: Regular Papers
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2012
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    20
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Percolation on interacting networks with &nbsp; feedback-dependency links
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">董高高</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Chaos
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    21
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Analysis of percolation behaviors of &nbsp; clustered networks with partial support-dependence relations
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">董高高</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Physical A
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    22
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Robustness of network of networks under &nbsp; targeted attack
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">董高高</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Physical Review E
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    23
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Joint remote state preparation between &nbsp; multi-sender and multi-receiver
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">章志华</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Quantum Information Processing
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    24
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Some operator convex functions of several &nbsp; variables
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">章志华</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Linear Algebra and its Applications
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    25
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Output feedback stabilization using small-gain&nbsp;&nbsp; &nbsp;method and reduced-order observer for &nbsp; stochastic nonlinear systems
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">赵丛然（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    IEEE Transactions on Automatic Control
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    26
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Global stabilization of stochastic high- order &nbsp; feedforward nonlinear systems with time-varying delay
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">赵丛然（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Automatica
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    27
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Interior WL,p regularity and Hölder &nbsp; continuity of weak solutions to a class of divergence Kolmogorov equations &nbsp; with discontinuous coefficients
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">朱茂春</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Milan Journal of Mathematics
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    28
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Regulating effect of the energy &nbsp; market-Theoretical and empirical analysis based on a novel energy &nbsp; prices-energy supply-economic growth dynamic&nbsp; &nbsp; system
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">田立新</span>
                </p>
                <p>
                    <span style="font-family:宋体">（通讯）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Applied Energy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    EI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    29
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Government control or low carbon &nbsp; lifestyle? – Analysis and application of a novel selective-constrained &nbsp; energy-saving and emission-reduction dynamic evolution system
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">田立新</span>
                </p>
                <p>
                    <span style="font-family:宋体">（通讯）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Energy Policy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2014
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    30
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Theoretical exploration of carbon &nbsp; emissions dynamic evolutionary system and evolutionary scenario analysis
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">田立新</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Energy
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
                <p>
                    SSCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    31
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    On global multidimensional supersonic flows &nbsp; with vacuum states at infinity
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">许刚</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Arch. Ration. Mech. Anal.
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    32
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Global multidimensional transonic conic &nbsp; shock wave for the pertuerbed supersonic flow past a cone
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">许刚</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SIAM J. Math. Anal.
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2009
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    33
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Proof of a conjecture of Baruah and &nbsp; Sarmah on generalized Frobenius partitions with 6 colors
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">夏先伟</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Journal of Number Theory
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2015
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:50px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="50">
                <p>
                    34
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Analogues of Ramanujan&#39;s partition &nbsp; identities
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    <span style="font-family:宋体">夏先伟</span>
                </p>
                <p>
                    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    Ramanujan Journal
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    2013
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="50">
                <p>
                    SCI
                </p>
            </td>
        </tr>
        <tr style=";height:84px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="84">
                <p>
                    35
                </p>
            </td>
            <td width="269" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="84">
                <p>
                    Local regularity and decay estimates of &nbsp; solitary waves for the rotation-modified Kadomtsev-Petviashvili equation
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="84">
                <p>
                    <span style="font-family:宋体">张平正（</span>1<span style="font-family:宋体">）</span>
                </p>
            </td>
            <td width="132" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="84">
                <p>
                    Transactions Of The American Mathematical &nbsp; Society
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="84">
                <p>
                    2012
                </p>
            </td>
            <td width="51" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="84">
                <p>
                    SCI
                </p>
            </td>
        </tr>
    </tbody>
</table>

<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">&nbsp;</span></strong>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3.</span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">决策咨询</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">机构研究成果不光注重于理论上的创新，而且与社会经济相联系，应用于实践，取得了良好的社会效益。<strong>1篇政策建议《</strong></span><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">抓住有利时机加快推进成品油价格改革》</span></strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">于2015年2月被<strong>全国哲学规划办公室刊发在《成果要报》2015年第9期上</strong>，这是机构在高层次决策咨询方面的突破。关于能源价格的中心<strong>研究报告《构建江苏燃气发电电价体系的对策建议》、《推进能源发电与电价市场化改革的对策建议》分别受到江苏省委常委、常务副省长李云峰及江苏省人大常务副主任张卫国批示，并被江苏省能源局煤电处采纳</strong>并应用于江苏省应对新一轮天然气价格调整中省天然气电价结构和电价水平的战略对策、江苏省“十三五”关于能源供需安全发展规划中。</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">&nbsp;</span></strong>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">三.科研项目</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">机构专兼职人员近5年已完成国家社科基金重大项目1项，国家自然科学基金项目11项，教育部人文社科基金和博士点基金项目3项，其他省部级项目7项。承担并顺利完成江苏高校哲学社会科学重点研究基地重大项目2项，其中一项被鉴定为优秀。机构专兼职人员正在承担国家自然科学基金项目18项，省部级项目4项，总经费数807万元。</span>
</p>
<table cellspacing="0" cellpadding="0" width="576">
    <tbody>
        <tr style=";height:30px" class="firstRow">
            <td width="576" colspan="7" style="border-color: windowtext; border-width: 1px; padding: 0px 7px;" height="30">
                <p>
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">本机构成员近5年以来已完成的主要科研项目</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">序号</span>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目下达编号</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目、课题名称</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项</span> <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">目</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">来</span> <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">源</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp;&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">目</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">起讫时间</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">科研经费</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">（万元）</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">完成人</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">(*)</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">12&amp;ZD062</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">我国能源价格体系建设与能源发展战略转型</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家社科基金重大项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.9-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.8</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">80</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11450110057-041323001</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">International young scientists from NSF China</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自然科学基金项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.7-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.7</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">Lippolis</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">(1)</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71073072</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">推进低碳经济发展的节能减排体系研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">28</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">4</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11071104</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">树指标随机过程的极限理论</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">28</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">杨卫国（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">5</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">61070231</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">非离散系统中的可计算性和计算复杂性研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">31</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">卢殿臣（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">6</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71073071</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于复杂系统理论的能源供需模型的理论方法及政策分析</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">27</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">孙</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">7</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11101189</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">含参数向量场的极限环与同、异宿轨研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">23</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">吴玉海（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">8</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11101191</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">光纤通信中光孤子的稳定控制和光纤怪波的不稳定控制</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">24</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">殷久利（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">9</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11101190</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">可压缩流体中混合型偏微分方程及其相关问题</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">23</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">许</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">刚（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span><span style="font-size:   12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0"> </span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">10</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11001110</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">余分裂李代数等若干问题的研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">16</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">夏利猛（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11226300</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">Gollnitz-Gordon</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">函数及其在数论中的应用</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自然科学天元基金</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">姚祥妹（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">12</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11126142</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-autospace:ideograph-other;vertical-align:middle">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">斜纹夜蛾的分龄治理的数学描述和模型研究</span><span style="font-size:   12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0"> </span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金天元基金</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">张</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">弘（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">13</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">09YJA90088</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于复杂网络模型的我国能源供需体系可持续发展战略研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">教育部人文社科研究项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2010.1-</span>
                </p>
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">7</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">孙</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">14</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">08JA790058</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">长江三角洲地区节能减排环境保护一体化研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">教育部人文社科研究项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2009.1-</span>
                </p>
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">7</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">15</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20093227110012</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">中国能源资源开发、利用可持续发展战略研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">教育部博士点基金资助项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2010.1-</span>
                </p>
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">6</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">16</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">BK2010329</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">双组份色散浅水波方程的解分析</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省自然科学基金面上项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2010.7-</span>
                </p>
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.7</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">8</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">17</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;text-autospace:ideograph-other;vertical-align:middle">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">BK2012282</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">非线性椭圆型方程中基态解问题的研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省科技厅项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.7-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.7</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">王俊（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">18</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:    0">2010-2-7</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">推进低碳经济发展的节能减排理论及应用</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏高校哲学社会科学重点研究基地重大项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2010.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">25</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">19</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:    0">2010-2-10</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">新时期能源供需储备系统理论与政策研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏高校哲学社会科学重点研究基地重大项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2010.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">17</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">孙</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:    &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012M</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">511679</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">半经典椭圆型方程基态解和多饱解问题的研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">中国博士后基金</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2011.9-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.2</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">5</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">王俊（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">21</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2009188</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">光纤传播中新型孤子的稳定性分析</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">省六大人才高峰基金</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2009.7-</span>
                </p>
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2012.12</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">卢殿臣（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">22</span></strong>
                </p>
            </td>
            <td width="88" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2013T60499</span>
                </p>
            </td>
            <td width="167" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">半经典椭圆型方程组中基态解问题的研究</span>
                </p>
            </td>
            <td width="96" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">中国博士后基金特别资助</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.7-2015.10</span>
                </p>
            </td>
            <td width="48" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">15</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="62" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center;line-height:15px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">王俊（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p style="line-height:27px">
    <span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">&nbsp;</span>
</p>
<table cellspacing="0" cellpadding="0" width="575">
    <tbody>
        <tr style=";height:31px" class="firstRow">
            <td width="575" colspan="13" style="border-color: windowtext; border-width: 1px; padding: 0px 7px;" height="31">
                <p>
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">本机构成员目前承担的科研项目统计</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:76px">
            <td width="67" colspan="2" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="76"></td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自然科学、社会科学基金项目</span>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国务院各部门项目及国防重大项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">地方政府项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">企事业单位委托项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国际组织资助或</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国际合作</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目</span>
                </p>
            </td>
            <td width="87" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="76">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">合计</span>
                </p>
            </td>
        </tr>
        <tr style=";height:28px">
            <td width="67" colspan="2" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="28">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目数</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">18</span></strong>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28"></td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">4</span></strong>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28"></td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28"></td>
            <td width="87" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="28">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">22</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:30px">
            <td width="67" colspan="2" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="30">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">经费数（万元）</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30">
                <p style="text-align:center;line-height:16px">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">761</span></strong>
                </p>
            </td>
            <td width="84" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30"></td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30">
                <p style="text-align:center;line-height:16px">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">46</span></strong>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30"></td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30"></td>
            <td width="87" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="30">
                <p style="text-align:center;line-height:16px">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">807</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:31px">
            <td width="575" colspan="13" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="31">
                <p style="line-height:16px">
                    <strong><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">本机构成员目前承担的主要科研项目情况</span></strong>
                </p>
            </td>
        </tr>
        <tr style=";height:63px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="63">
                <p style="line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">序号</span>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目下达编号</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项目、课题名称</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项</span> <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">目</span>
                </p>
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">来</span> <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">源</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">项</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp;&nbsp;&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">目</span>
                </p>
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">起讫时间</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">科研经费</span>
                </p>
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">（万元）</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="63">
                <p style="text-align:center;line-height:16px">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">负责人（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">*</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <a name="_Hlk432875545"></a><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11571142</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">关于树指标随机过程极限理论的进一步研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2019.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">50</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">杨卫国（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">2</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11571140</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">全空间上几类椭圆型方程中若干问题的研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2019.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">55</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">王</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">俊</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">3</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11571141</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">可压缩流体力学中的偏微分方程</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2019.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">50</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">许</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">刚</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">4</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11571143</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">条件分拆函数的同余性质和组合性质</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2019.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">50</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">夏先伟</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">5</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71473108</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于演化博弈的智能电网供需动态耦合优化及政策分析</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2018.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">62</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">孙</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">6</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">51276081</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">煤电系统碳捕集碳封存下的碳排放及经济技术综合评价</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">70</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">7</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">91546118</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于大数据的微观宏观行为综合分析</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金重大计划培育项目</span>
                </p>
                <p style="text-align:center">
                    <br/>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2018.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">43</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">8</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71273119</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于计算实验的石油供需网络优化与动态调控研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">58</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">孙</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">梅（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">9</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11271164</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">流体力学方程的适定性及其相关问题</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">60</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">张平正（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">10</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71271103</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于复杂网络的金融流动性风险的计算实验范式的研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">53</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">姚洪兴（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">11</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11171135</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">典型非线性浅水波方程的低正则解散射及渐进性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2<span style="letter-spacing:0">012.1-</span></span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">52</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">田立新（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">12</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11501253</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">新型双组份</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">Camassa-Holm</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">方程的等谱问题及适定性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2018.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">18</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">陈文霞（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">13</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">61403171</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">不同攻击策略下加权网络的网络鲁棒性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2017.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">24</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">董高高（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">14</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">71403105</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">低碳约束下多种能源供需相依网络的安全性与防御策略研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2017.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">23</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">杜瑞瑾（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">15</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">51306072</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">基于价格改革的能源利用效率与消费结构分析</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">25</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">蒋书敏（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">16</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11201187</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">斜纹夜蛾耐药机制的演化及种群控制策略</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">22</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">张</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">弘（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">17</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11201188</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于序列比率的组合性质研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">23</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">夏先伟（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">18</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">11201186</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">具有临界指数增长的椭圆型方程若干问题的研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">国家自科基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.1-</span>
                </p>
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2015.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">23</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">王</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">&nbsp; </span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">俊（</span><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">1</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">19</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">BK20130535</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">多种攻击策略下相互依赖加权网络的鲁棒性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省自然科学基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.7-2017.6</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">杜瑞瑾（1）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">20</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">BK20130535</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">切换不连通图上非线性多个体系统的一致性问题</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省自然科学基金青年项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.7-2016.6</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">20</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">贾&nbsp; 强（1）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">21</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">14KJB12000</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p>
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">不同攻击策略下基于实际相依特性的相依网络鲁棒性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省高校自然科学研究面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2014.8-2016.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">董高高（1）</span>
                </p>
            </td>
        </tr>
        <tr style=";height:57px">
            <td width="31" style="border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: none; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:   0">22</span></strong>
                </p>
            </td>
            <td width="72" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">13KJB120001</span>
                </p>
            </td>
            <td width="183" colspan="3" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">基于平均理论的快速时变多个体网络的一致性研究</span>
                </p>
            </td>
            <td width="96" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">江苏省高校自然科学研究面上项目</span>
                </p>
            </td>
            <td width="84" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">2013.8-2015.12</span>
                </p>
            </td>
            <td width="48" colspan="2" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif;letter-spacing:0">3</span><span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">万</span>
                </p>
            </td>
            <td width="60" style="border-top-style: none; border-left-style: none; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px;" height="57">
                <p style="text-align:center">
                    <span style="font-size:12px;font-family:   &#39;微软雅黑&#39;,sans-serif;letter-spacing:0">贾&nbsp; 强（1）</span>
                </p>
            </td>
        </tr>
        <tr height="0">
            <td width="31" style="border: none"></td>
            <td width="47" style="border: none"></td>
            <td width="46" style="border: none"></td>
            <td width="45" style="border: none"></td>
            <td width="79" style="border: none"></td>
            <td width="48" style="border: none"></td>
            <td width="31" style="border: none"></td>
            <td width="60" style="border: none"></td>
            <td width="20" style="border: none"></td>
            <td width="61" style="border: none"></td>
            <td width="21" style="border: none"></td>
            <td width="26" style="border: none"></td>
            <td width="59" style="border: none"></td>
        </tr>
    </tbody>
</table>
<p style="line-height:27px">
    <span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">&nbsp;</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family: &#39;微软雅黑&#39;,sans-serif">四.主要研究方向</span></strong>
</p>
<p style="text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">机构以科学研究与科技服务为主要任务，以建设本学科领域国内领先、国际先进的科学研究平台为目标，重在获取高水平科研项目和科技成果，形成有优势、有特色的科研和人才培养基地。造就一支知识层次高，具有国际视野和前瞻能力、团结合作、富有创新的高水平应用系统分析科学研究学术队伍，为中国及江苏自然科学及社会经济发展作出应有贡献。</span>
</p>
<p style=";margin-bottom:0;line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">1. </span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">能源复杂系统分析研究方向</span></strong>
</p>
<p style=";margin-bottom:0;text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">本方向主要以数量经济、能源经济系统、能源系统工程、经济数学、经济均衡分析、节能减排、动态大系统建模为主要研究对象：</span>
</p>
<p style="text-indent:18px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）基于大数据的能源系统微观宏观行为综合分析</span>
</p>
<p style="text-indent:18px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）基于演化博弈的智能电网供需动态耦合优化及政策分析</span>
</p>
<p style="text-indent:18px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（3）低碳约束下多种能源供需相依网络的安全性与防御策略</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">2. </span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">非线性分析理论及其应用研究方向</span></strong>
</p>
<p style=";margin-bottom:0;text-indent:24px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">本方向主要以流体力学、物理学、非线性控制理论、优化理论、生物学和材料科学等领域的非线性微分方程为主要研究对象：</span>
</p>
<p style=";margin-bottom:0;text-indent:18px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）变分方法以及在偏微分方程应用</span>
</p>
<p style=";margin-bottom:0;text-indent:18px;line-height:27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）可压缩流体力学的数学理论</span>
</p>
<p style=";margin-bottom:0;line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">3. </span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">复杂网络理论及其应用研究方向</span></strong>
</p>
<p style="text-indent: 24px;line-height: 27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">本方向主要以复杂系统、复杂网络、鲁棒性为主要研究对象：</span>
</p>
<p style="text-indent: 18px;line-height: 27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）复杂网络的同步及其控制</span>
</p>
<p style="text-indent: 18px;line-height: 27px">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）复杂网络的博弈</span>
</p>
<p style="text-indent:18px;line-height:27px;text-autospace:none">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（3）基于复杂网络的人类行为的动力学研究 </span>
</p>
<p style="text-indent:18px;line-height:27px;text-autospace:none">
    <span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">（4）多个耦合相依复杂网络研究</span>
</p>
<p style="line-height:27px">
    <strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">4. </span></strong><strong><span style="font-size:12px;font-family:&#39;微软雅黑&#39;,sans-serif">信息系统理论及其应用研究方向</span></strong>
</p>
<p style="margin-top:4px;text-indent:24px;line-height:27px">
    <span style="font-size: 12px;font-family:&#39;微软雅黑&#39;,sans-serif">本方向主要以信息论、概率论、随机系统等领域为主要研究对象：</span>
</p>
<p style="margin-top:4px;text-indent:18px;line-height:27px">
    <span style="font-size: 12px;font-family:&#39;微软雅黑&#39;,sans-serif">（1）国际概率论与信息论随机非线性系统的控制</span>
</p>
<p style="margin-top:4px;text-indent:18px;line-height:27px">
    <span style="font-size: 12px;font-family:&#39;微软雅黑&#39;,sans-serif">（2）随机非线性系统的控制</span>
</p>
<p>
    <br/>
</p>
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