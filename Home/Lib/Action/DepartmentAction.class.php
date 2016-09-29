<?php
	class DepartmentAction extends CommonAction{
		public function index(){
			$department=M('department');
			$res=$department->order('department_id asc')->select();
			$id=isset($_GET['id'])?$_GET['id']:1;
			$one=$department->find($id);
			$this->assign('list',$res);
			$this->assign('dept',$one);
			$this->display();
		}
	}
?>