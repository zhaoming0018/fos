<?php 
	class UserAction extends CommonAction{
		public function index(){
			$user=D('Users');
			$where['user_true']=1;
			$res=$user->where($where)->select();
			// dump($res);
			// exit();
			$this->assign('user',$res);
			if($_SESSION['user_priority']!=0){
				$this->error('你不是管理员');
			}
			$this->assign('title','用户管理');
			$this->display();
		}
		public function delete(){
			if($_SESSION["user_priority"]!=0){
				$this->error("你不是总管理员");
			}else{
				$user=M('Users');
				$where['user_name']=$_GET['username'];
				$data['user_true']=0;
				if($user->where($where)->save($data)){
					$this->success('用户删除成功',U('User/index'));
				}else{
					$this->error('用户删除失败');
				}
			}
		}
		public function add(){
			$this->assign('title','用户增加');
			$this->display('edit');
		}
		public function doAdd(){
			$user=D('Users');
			if(!$user->create()){
				$user->check('user_name','','帐号名称已经存在！',0,'unique',1);
      			$this->error($user->getError());
			}else{
				if($user->add()){
					$this->success('添加用户成功',U('User/index'));
				}else{
					$this->error('添加用户失败');
				}
			}
		}
		public function edit(){
			$user=D('Users');
			$where['user_name']=$_GET['username'];
			$field=array('user_name');
			$res=$user->where($where)->field($field)->find();
			if(!$res){
				$this->error('没有该用户');
			}else{
				// dump($res);
				// exit();
				$this->assign('username',$res['user_name']);
				$this->assign('title','用户编辑');
				$this->display();
			}
		}
		public function doEdit(){
			$user=D('Users');
			$where['user_name']=$_POST['user_name'];
			$res=$user->where($where)->find();
			if(!$res){
				$this->error("用户不存在");
			}
			if($res['user_password']!=md5($_POST['past_password'])){
				$this->error('原密码输入错误');
			}
			if(!$user->create()){
				$this->error($user->getError());
			}
			if(!$user->where($where)->save()){
				// dump($user);
				// exit();
				$this->error('用户更改失败！');
			}else{
				$this->success('用户更改成功！',U('User/index'));
			}
		}
		public function doChange(){
			$user=D('Users');
			$where['user_name']=$_SESSION['user_name'];
			$res=$user->where($where)->find();
			if($res['user_password']!=md5($_POST['past_password'])){
				$this->error('原密码输入错误');
			}
			if(!$user->create()){
				$this->error($user->getError());
			}
			if(!$user->where($where)->save()){
				// dump($user);
				// exit();
				$this->error('用户更改失败！');
			}else{
				$this->success('用户更改成功！',U('Index/index'));
			}
		}
	}
 ?>