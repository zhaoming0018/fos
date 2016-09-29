<?php
	class EnAction extends CommonAction{
		public function Faculties(){
			$department=M('Department');
			$name1=$department->select();
			foreach($name1 as $value){
				$names[$value['department_id']]=$value["department_name_en"];
			}
			$foreign=M('Foreign');
			$field=array(
				"foreign_id"=>"id",
				"foreign_name"=>"name"	
			);
			foreach($names as $key=>$value){
				$where=array();
				$where['foreign_department']=$key;
				$list[$key]=$foreign->where($where)->field($field)->order('foreign_name asc')->select();
				$list[$key]["count"]=count($list[$key]);
			}
			//dump($names);
			$this->assign('department',$names);
			$this->assign("list",$list);
//  			dump($list);
//  			exit();
			$this->display();
		}
		
		public function teacher(){
		    $teacher=M('Foreign');
		    $department=M('Department');
		    $where['foreign_id']=$_GET['id'];
		    $list=$teacher->where($where)->find();
	        $dept=$department->find($list['foreign_department']);
	        $dept=$dept['department_name_en'];
	        $list['foreign_department']=$dept;
// 		    dump($list);
// 		    exit();
		    $this->assign('list',$list);
		    $this->display();
		}
		
		//部门简介
		public function Department(){
			$department=M('Department');
			$list=$department->select();
			//dump($list);
			$this->assign('list',$list);
			$this->display();
			//注意html页变量表示方式
		}
//		public function DS(){
//			$this->display();
//		}

//		public function SP(){
//			$this->display();
//		}
	}
?>