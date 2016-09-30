<?php
// 后台公共类
class PublicAction extends Action {
    //验证码方法
    public function verify(){
			import('ORG.Util.Image');
			Image::buildImageVerify();
	}
}