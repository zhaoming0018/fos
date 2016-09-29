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
h4{
	color:#B31B1B;
	font-size:18px;
	margin:20px 0;
}
h4 span{
	display:inline-block;
	margin-right:10px;
}
.olParty li{
	line-height:25px;
}
</style>
<title>学院团委</title>
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
					<div class="navTitle">党群工作</div><!-- 数据库读出数据 -->
					<ul>
						<li><a href="__APP__/Dqgz/zzjs">组织建设</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Dqgz/xydw">学院党委</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Dqgz/xytw">学院团委</a></li><!-- 数据库读出 -->
						<li><a href="__APP__/Dqgz/xygh">学院工会</a></li><!-- 数据库读出 -->
						
					</ul>
				</div><!-- end class="navList" -->
			</div><!-- end navside -->
		</div><!-- end class="w2" -->
		
		<div class="w10 pull-left">
			<div class="article">
				<div class="articleTitle">
					<div>学院团委</div>
					<hr/>
				</div>
				<div class="articleBody w9 center-block">
					<h4><span class="icon-pushpin"></span>学院团委</h4>
					<table class="table table-bordered table-center">
						<tr><td>团委副书记</td><td>段诗达（数师1301）庄思若（物师1301）</td></tr>
						<tr><td>宣传部部长</td><td>姚颖莹（数师1401）吴雪莉（物师1402）</td></tr>
						<tr><td>组织部部长</td><td>崔娇（信计1401）张冉珺（数师1402）孙春雷（数师1401）</td></tr>
						<tr><td>马研会会长</td><td>邹宸娴（数师1401）</td></tr>
						<tr><td>副会长</td><td>蓝天琦（应数1401）刘宇航（数师1401）</td></tr>
					</table>
				</div><!-- end class="w9" -->
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