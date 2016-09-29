<?php 
	class EneduAction extends CommonAction{
		public function index(){
		$foreign=M('foreign');
        import('ORG.Util.Page');
        $count      = $foreign->count();
        $Page       = new Page($count,20);
        $show       = $Page->show();
        $list = $foreign->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
		$this->assign('title','英语版本');
        $this->display();
		}
		public function doAdd(){
			$foreign=M('Foreign');
            import('ORG.Net.UploadFile');
            
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/upload/file/foreign/';// 设置附件上传目录
            $upload->saveRule = time;
            $size=$_FILES['foreign_photo']['size'];
            if($size!=0){
                if(!$upload->upload()) {// 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }
                else{// 上传成功 获取上传文件信息
                    $info =  $upload->getUploadFileInfo();
                    $content["foreign_photo"]=$info[0]['savename'];
                }
            }
            
            foreach ($_POST as $key => $value) {
                $arr=explode("\r\n", $value);
                $ans="";
                if(count($arr)>1){
                    foreach($arr as $value){
                        $ans=$ans.$value."<br/>";
                    }
                    $ans=rtrim($ans,"<br/>");
                }else{
                    $ans=$value;
                }
                $content[$key]=$ans;
            }
            // dump($content);
            // exit();
            $id=$foreign->add($content);
            if($id>0){
                $this->success('更改成功',U('Enedu/index'));
            }
            else{
                $this->error('更改失败');
            }
		}
		public function edit(){
			$this->assign('position',M('Position')->select());
             $this->assign('department',M('Department')->select());
            $foreign=M('foreign');
            if(isset($_GET['id'])){
                $res=$foreign->find($_GET['id']);
                foreach($res as $key=>$value){
                    $arr=explode("<br/>",$value);
                    $ans="";
                    if(count($arr)>1){
                        foreach($arr as $value){
                            $ans=$ans.$value."\\r\\n";
                        }
                    }else{
                        $ans=$value;
                    }
                    $content[$key]=$ans;
                }
                $this->assign('foreign',$content);
            }
			$this->assign('title','英语版本编辑');
            $this->display();
		}
		public function doEdit(){
			$foreign=M('foreign');
            
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/upload/file/foreign/';// 设置附件上传目录
            $upload->saveRule = time;
            $size=$_FILES['foreign_photo']['size'];
            if($size!=0){
                if(!$upload->upload()) {// 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }
                else{// 上传成功 获取上传文件信息
                    $info =  $upload->getUploadFileInfo();
                    $content["foreign_photo"]=$info[0]['savename'];
                }
            }
            
            foreach ($_POST as $key => $value) {
                $arr=explode("\r\n", $value);
                $ans="";
                if(count($arr)>1){
                    foreach($arr as $value){
                        $ans=$ans.$value."<br/>";
                    }
                    $ans=rtrim($ans,"<br/>");
                }else{
                    $ans=$value;
                }
                $content[$key]=$ans;
            }
            
            $where['foreign_id']=$_GET['id'];
            $id=$foreign->where($where)->save($content);
            //dump($_POST);exit();
            if($id>0){
                $this->success('更改成功',U('Enedu/index'));
            }
            else{
                $this->error('更改失败');
            }

		}
		public function delete(){
			 $foreign=M('foreign');
        	$sql='foreign_id='.$_GET['id'];
        	$count=$foreign->where($sql)->delete();
        	if($count>0){
        	    $this->success('删除成功',U('Enedu/index'));
        	}
        	else{
            	$this->error('删除失败');
       	 	}
		}
	}
 ?>