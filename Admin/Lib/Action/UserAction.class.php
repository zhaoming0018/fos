<?php 
  header("Content-Type:text/html;charset=utf-8");
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
				$id = $user->where($where)->save($data);
				if($id>0){
                echo "<h1>执行成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/User/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>执行失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
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
				if($id>0){
                echo "<h1>添加成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/User/index';},1000);</script>";
                exit();
				}
				else{
					echo "<h1>添加失败</h1>";
					echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
					exit();
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
			$id = $user->where($where)->save();
			if($id>0){
                echo "<h1>更改成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/User/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>更改失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
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
			$id=$user->where($where)->save();
			if($id>0){
                echo "<h1>更改成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/Index/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>更改失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
		}
	}
 ?>