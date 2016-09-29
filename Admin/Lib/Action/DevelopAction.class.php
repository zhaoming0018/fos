<?php
	class DevelopAction extends CommonAction{
		public function index(){
			$denews=M('Denews');
			$develop=M('develop');
			import('ORG.Util.Page');
			if(isset($_GET['category'])){
				$where['develop_level']=1;
				$where['develop_father']=$_GET['category'];
				$field=array('develop_id');
				$res=$develop->field($field)->where($where)->select();
				$arr=array();
				foreach($res as $key=>$value){
					array_push($arr,$value['develop_id']);
				}
				$where=array();
				$where['denews_true']=1;
				$where['denews_category']=array('in',$arr);				
				$count      = $denews->where($where)->count();
				$Page       = new Page($count,20);
				$ans=$denews->where($where)->order('denews_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('title','培养');
			}else 
			if(isset($_GET['name'])){
				$where['develop_id']=$_GET['name'];
				$where=array();
				$where['denews_category']=$_GET['name'];
				$where['denews_true']=1;
				$count      = $denews->where($where)->count();
				$Page       = new Page($count,20);
				$ans=$denews->where($where)->order('denews_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();			
			}else{
				$where['denews_true']=1;
				$count      = $denews->where($where)->count();
				$Page       = new Page($count,20);
				$ans=$denews->where($where)->order('denews_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
				
			}
			$Page->setConfig('prev','&lt;');
			$Page->setConfig('next','&gt;');
			$Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
			$show       = $Page->show();
			$this->assign('list',$ans);
			$this->assign('page',$show);
			 $this->assign('title','人才培养管理');
			$this->display();
		}
		public function edit(){
			$denews=M('Denews');
			$develop=M('Develop');
			$where_list['develop_level']=1;
			$list=$develop->where($where_list)->select();
			$this->assign('list',$list);
			if(isset($_GET['id'])){
				$where['denews_id']=$_GET['id'];
				$where['denews_true']=1;
				$res=$denews->where($where)->find();
				if(!$res){
				    $this->error('没有这篇文章');
				}
			}
			$this->assign('cate',$res['denews_category']);
			 $this->assign('title','人才培养管理');
			$this->assign('denews',$res);
			$this->display();
		}
		public function doAdd(){
			$denews=M('Denews');
            
            $data=array(
                'denews_title'=>$_POST['title'],
                'denews_time'=>time(),
                'denews_content'=>$_POST['editorValue'],
                'denews_category'=>$_POST['denews_category'],
            );
            $id=$denews->add($data);
            if($id>0){
                $this->success('添加成功',U("Develop/index"));
            }
            else{
                $this->error('添加失败');
            }
		}
		public function doEdit(){
            $denews=M('Denews');
            $data=array(
                'denews_title'=>$_POST['title'],
                'denews_time'=>time(),
                'denews_content'=>$_POST['editorValue'],
                'denews_category'=>$_POST['denews_category'],
            );
            $where['denews_id']=$_GET['id'];
            $id=$denews->where($where)->save($data);
            if($id>0){
                $this->success('更改成功',U('Develop/index'));
            }
            else{
                $this->error('更改失败');
            }
    	}
    	public function delete(){
    		$denews=M('Denews');
    		$where['denews_id']=$_GET['id'];
    		$data['denews_true']=0;
    		$id=$denews->where($where)->save($data);
    		if($id>0){
                $this->success('更改成功',U('Develop/index'));
            }
            else{
                $this->error('更改失败');
            }
    	}
	}
?>