<?php
	/**
	 * 通用模块，后台模块继承
	 */
 header("Content-Type:text/html;charset=utf-8");
	class CommonAction extends Action{
		/**
		 * 初始化方法，有以下功能：
		 * 1、判断是否登陆
		 * 2、从数据库读取各模块名和分类
		 * @return null
		 */
		public function _initialize(){
			if(!isset($_SESSION["user_name"])||$_SESSION["user_name"]==""){
				$this->redirect("Login/index");
			}
			$this->assign('nav_category',M('Category')->select());
			$this->assign('nav_position',M('Position')->select());
			$this->assign('nav_filecate',M('Filecate')->select());
		}
		
	}
?>