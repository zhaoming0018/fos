<?php
	class CommonAction extends Action{
		public function _initialize(){
			$info=M('Info');
			$where['info_name']='visit_count';
			$temp=$info->where($where)->find();
			$visit_count=$temp['info_int'];
			$this->assign('visitor_count',$visit_count);
		}
		public function _empty(){
			R('Empty/_empty');
		}
	}
?>