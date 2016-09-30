<?php
 header("Content-Type:text/html;charset=utf-8");
class PicManageAction extends CommonAction {
  public function index(){
	  $pic=M('pic');
	  $list=$pic->order('pic_id desc')->select();
	 // var_dump($list);
	  $this->assign("list",$list);
	  $this->assign("title","文件上传"); 
	  $this->display();
  }
  
  //数据添加
   public function add(){
			$this->assign('title','文件上传');
			$this->display("upload");
		} 
		
	
	
	//执行添加图片的操作
	public function doAdd(){
			$pic=M('pic');
			import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/Images/';// 设置附件上传目录
            $upload->saveRule = time;
			$upload->exts     = array('jpg', 'gif', 'png', 'jpeg');
            if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
            }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            }
			$data=array(
				'pic_name'=>$_FILES['photo']['name'],
				'pic_path'=>$info[0]['savename'],
				'pic_time'=>time()
			);
			$id=$pic->add($data);	
			if($id>0){
                echo "<h1>添加成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/picManage/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>添加失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
		}
		
		//删除图片
		public function delete(){
			$pic=M('pic');
			$where['pic_id']=$_GET['id'];
			$res=$pic->find($_GET['id']);
			$path='./Public/Images/'.$res['pic_path'];
			if(!unlink($path)){
				$pic->where($where)->delete();
				$this->error('没有本地文件',U('PicManage/index'));
			}
			$count=$pic->where($where)->delete();
			if($count>0){
                echo "<h1>添加成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/picManage/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>添加失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
		}
		
}