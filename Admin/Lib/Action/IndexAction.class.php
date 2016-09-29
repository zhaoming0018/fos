<?php
/**
 * 主模块，用于显示后台的主页	
 */
class IndexAction extends CommonAction {
    public function index(){
        $this->assign('title','主页');
    	$this->display();
    }
}