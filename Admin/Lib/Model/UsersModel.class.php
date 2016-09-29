<?php
	class UsersModel extends Model{
    	protected $tableName = 'users';
        protected $_validate = array(
    		array('user_name','require','请输入用户名'), 
            array('user_password','require','请输入密码'),
            array('verify','require','验证码必须！'),
            array('confirm','user_password','确认密码不正确',0,'confirm'),
        );
        protected $_auto = array(
            array('user_password','md5',1,'function'),
            array('user_time','time',1,'function'),
        );
	}
?>