<?php
//空模块类
class EmptyAction extends CommonAction {
	public function _empty($name){
		$url = MODULE_NAME + $name;
		$this->display($url);
	}
}