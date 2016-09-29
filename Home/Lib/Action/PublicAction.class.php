<?php
//公共模块类
class PublicAction extends CommonAction {
    public function index(){
	
	}
	public function _empty(){
		$map = array('session_expire'=>array('gt',NOW_TIME));
		$inline = D('Session')->where($map)->count();
		$this->assign('guest_count',$inline);
	}
}