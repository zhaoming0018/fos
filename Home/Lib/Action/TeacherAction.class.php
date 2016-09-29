<?php
	//人物显示类
	class TeacherAction extends CommonAction{
		public function index(){
			$department=M('Department');
			$name1=$department->select();
			//dump($name1);
			foreach($name1 as $value){
				$names[$value['department_id']]=$value["department_name"];
			}
			$person=M('Person');
			$field=array(
				"person_id"=>"id",
				"person_name"=>"name",
				"person_desc"=>"desc"
			);
			
			foreach($names as $key=>$value){
				$where=array();
				$where['person_department']=$key;
				$list[$key]=$person->where($where)->field($field)->order('person_pinyin asc')->select();
				$list[$key]["count"]=count($list[$key]);
			}
			// dump($names);
			// exit();
			$this->assign('department',$names);
			$this->assign("list",$list);
			$this->display();
		}
		public function cate(){
            $person=M('Person');
            $position=M('Position');
			$id=isset($_GET['id'])?$_GET['id']:2;
            $title=$position->find(isset($_GET['id'])?$_GET['id']:2);
            $title=$title['position_name']."风采";
            $where['person_position']=isset($_GET['id'])?$_GET['id']:2;
			$sql='person_post & ';
			$sql .= 1<<$id-1;
			$sql .= ">0";
            $res=$person->where($sql)->order('person_pinyin asc')->select();
            $this->assign("title",$title);
            $this->assign("list",$res);
            $this->display();
		}
		public function wpzj(){
			$this->display();
		}
		public function show(){
			$person=M('Person');
			$res=$person->find($_GET['id']);
			$this->assign('person',$res);
			$this->display();
		}
		public function top(){
			$news=M('News');
			$where['news_category']=7;
			$res=$news->where($where)->select();
			if(isset($_GET['newsid'])){
				$where=array();
				$where['news_id']=$_GET['newsid'];
				$ans=$news->where($where)->find();
				$this->assign('info',$ans);
			}
			$this->assign('top',$res);
			$this->display();
		}
	}
?>