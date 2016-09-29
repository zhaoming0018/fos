<?php
	class DevelopAction extends CommonAction{
		public function index(){
			$denews=M('Denews');
			$develop=M('develop');
			$field=array('develop_name');
			$array_category=$develop->field($field)->select();
			if(isset($_GET['category'])){	
				$where['develop_level']=1;
				$where['develop_father']=$_GET['category']=='1'?1:2;
				$name=$array_category[$_GET['category']-1];
				$field=array('develop_id');
				$res=$develop->field($field)->where($where)->select();
				$arr=array();
				foreach($res as $key=>$value){
					array_push($arr,$value['develop_id']);
				}
				$ans=array();
				for($i=0;$i<=count($arr);$i++)
				{
					$where=array();
					$where['denews_true']=1;
					$where['denews_category']=$arr[$i];
					$temp_name=$array_category[$arr[$i]-1]['develop_name'];
					$temp_ans=$denews->where($where)->limit(50)->select();
					$ans[$temp_name]=$temp_ans;
				}
				//dump($ans);
				
			}else 
			if(isset($_GET['name'])){
				$where=array();
				$where['denews_category']=$_GET['name'];
				$name=$array_category[$_GET['name']-1];
				$where['denews_true']=1;
				$ans=$denews->where($where)->select();
			}else{
				$where['denews_true']=1;
				$ans=$denews->select();
			}
			$this->assign('name',$name['develop_name']);
			$this->assign('array_category',$array_category);
			$this->assign('list',$ans);
			$this->display();
		}
		public function show(){
			$denews=M('Denews');
			$where['denews_id']=$_GET['title'];
			$res=$denews->where($where)->find();
			$this->assign('denews',$res);
			$this->display();
		}
	}
?>