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
			echo "<h1>验证码错误，两秒后跳转</h1>";
      echo "<script>setTimeout(function(){location.href='/fos/admin.php/login/index';},2000);</script>";
      exit();
		}
		//查找
    
    if(!$user->create()){
      $this->error($user->getError());
    }else{
  		$where["user_name"]=$_POST['user_name'];
    	$where['user_password']=md5($_POST['user_password']);
    	$res=$user->where($where)->find();
    	if($res==NULL){
        echo "<h1>登录失败，账号或密码错误</h1>";
    		echo "<script>setTimeout(function(){location.href='/fos/admin.php/login/index';},2000);</script>";
          exit();
    	}
    	else{
    		//登录，写入session
			$_SESSION['user_name']=$_POST['user_name'];
			$_SESSION['user_priority']=$res['user_priority'];
    		echo "<h1>登录成功，即将进入后台</h1>";
        echo "<script>setTimeout(function(){location.href='/fos/admin.php/index/index';},2000);</script>";
          exit();
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