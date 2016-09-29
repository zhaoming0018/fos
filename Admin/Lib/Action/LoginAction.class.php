<?php
/**
 * 登陆模块，用于处理登陆相关的事务
 */
class LoginAction extends Action {
  /**
   * 用于显示登陆页面
   * @return null 
   */
  public function index(){
	  $this->assign('title','登陆后台');
	  $this->display();
  }
  
  /**
   * 用于处理登陆操作
   * @return null
   */
  public function doLogin(){
  	$user=D("Users");
		//验证
		if($_SESSION['verify']!=md5($_POST['verify'])){
			$this->error('验证码错误');
		}
		//查找
    
    if(!$user->create()){
      $this->error($user->getError());
    }else{
  		$where["user_name"]=$_POST['user_name'];
    	$where['user_password']=md5($_POST['user_password']);
    	$res=$user->where($where)->find();
    	if($res==NULL){
    		$this->error("登录失败!",U('Login/index'));
    	}
    	else{
    		//登录，写入session
			$_SESSION['user_name']=$_POST['user_name'];
			$_SESSION['user_priority']=$res['user_priority'];
    		$this->success("登录成功",U('Admin/Index/index'));
    	}
    }
  }
  public function logout(){
      unset($_SESSION['user_name']);
      unset($_SESSION['user_priority']);
      if(($_SESSION['user_name']==null||$_SESSION['user_name']=="")&&($_SESSION['user_priority']==null||$_SESSION['user_priority']=="")){
          $this->redirect("../index.php");  
      }else{
          $this->error("退出失败");
      }
  }
}