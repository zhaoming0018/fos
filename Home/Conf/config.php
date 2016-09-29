<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'=>1,
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',
	'DB_PREFIX'=>'lxy_',
    //'DB_DSN'=>'mysql://root:@localhost:3306/ujslxy',//使用DSN配置数据库
	'DB_DSN'=>'mysql://ujslxy:123456@115.28.74.4:3306/ujslxy',//使用DSN配置数据库
	//'DB_DSN'=>'mysql://用户名:密码@主机:3306/数据库'
	//'SHOW_PAGE_TRACE'=>true,//开启页面trace功能
	//'APP_STATUS'=>'test',
	'URL_CASE_INSENSITIVE' =>true,//路径大小写不区分
	'TMPL_EXCEPTION_FILE' =>'404.html',
	);
?>