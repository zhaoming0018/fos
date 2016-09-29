<?php
// 后台注册类
class RegAction extends Action {
    public function index(){
		$this->assign('title','注册');
		$this->display();
    }
    public function doReg(){
    	
    }
}