<?php
// 后台注册类
 header("Content-Type:text/html;charset=utf-8");
class RegAction extends Action {
    public function index(){
		$this->assign('title','注册');
		$this->display();
    }
    public function doReg(){
    	
    }
}