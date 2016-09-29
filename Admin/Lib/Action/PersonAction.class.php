<?php
// 人物后台管理类
class PersonAction extends CommonAction {
    /*
        方法名：index
        作用  ：用于后台任务列表的显示
     */
    public function index(){
    	$person=M('Person');
        $position=M('Position');
        $department=M('Department');
        $where["person_position"]=$_GET["position"];
        import('ORG.Util.Page');
        if(isset($_GET["position"]))
        {
            $count      = $person->where($where)->count();
            $Page       = new Page($count,20);
            $list = $person->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        else
        {
            $count      = $person->count();
            $Page       = new Page($count,20);
            $list = $person->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        $Page->setConfig('prev','&lt;');
        $Page->setConfig('next','&gt;');
        $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
        $show       = $Page->show();
        $t=0;
        foreach($list as $x){
            $x['person_position']=$position->find($x['person_position']);
            $x['person_position']=$x['person_position']['position_name'];
            $list[$t]=$x;
            $t++;
        }
        $t=0;
        foreach($list as $x){
            $x['person_department']=$department->find($x['person_department']);
            $x['person_department']=$x['person_department']['department_name'];
            $list[$t]=$x;
            $t++;
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
		$this->assign('title','人物管理');
        $this->display();
    }
    /*
        方法名：doAdd
        作用  ：添加人物
     */
    public function doAdd(){
           $person=M('Person');
           import('ORG.Net.UploadFile');
            
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/upload/file/person/';// 设置附件上传目录
            $upload->saveRule = time;
            $size=$_FILES['person_photo']['size'];
            if($size!=0){
                if(!$upload->upload()) {// 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }
                else{// 上传成功 获取上传文件信息
                    $info =  $upload->getUploadFileInfo();
                    $content["person_photo"]=$info[0]['savename'];
                }
            }
            
            foreach ($_POST as $key => $value) {
                $arr=explode("\r\n", $value);
                $ans="";
				if(is_array($value)){
					$ans=0;
					foreach($value as $k=>$v){
						$ans=$ans|(1<<($v-1));
						echo $ans."<br/>";
					}
				}elseif(count($arr)>1){
                    foreach($arr as $value){
                        $ans=$ans.$value."<br/>";
                    }
                    $ans=rtrim($ans,"<br/>");
                }else{
                    $ans=$value;
                }
                $content[$key]=$ans;
            }
			// dump($_POST);
            // dump($content);
            // exit();
            $id=$person->add($content);
            if($id>0){
                $this->success('更改成功',U('Person/index'));
            }
            else{
                $this->error('更改失败');
            }
    }
    /*
        方法名：edit
        作用  ：初始化编辑页
     */
    public function edit(){
            $this->assign('position',M('Position')->limit(6)->select());
             $this->assign('department',M('Department')->select());
            $person=M('Person');
            if(isset($_GET['id'])){
                $res=$person->find($_GET['id']);
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
				// dump($content);
				// exit();
                $this->assign('person',$content);
            }
			$this->assign('title','人物编辑');
            $this->display();
    }
    /*
        方法名：doEdit
        作用  ：完成编辑，人物更新
     */
    public function doEdit(){
            $person=M('Person');
            
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/upload/file/person/';// 设置附件上传目录
            $upload->saveRule = time;
            $size=$_FILES['person_photo']['size'];
            if($size!=0){
                if(!$upload->upload()) {// 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }
                else{// 上传成功 获取上传文件信息
                    $info =  $upload->getUploadFileInfo();
                    $content["person_photo"]=$info[0]['savename'];
                }
            }
            
            foreach ($_POST as $key => $value) {
                $arr=explode("\r\n", $value);
                $ans="";
				if(is_array($value)){
					$ans=0;
					foreach($value as $k=>$v){
						$ans=$ans|(1<<($v-1));
						//echo $ans."<br/>";
					}
				}elseif(count($arr)>1){
                    foreach($arr as $value){
                        $ans=$ans.$value."<br/>";
                    }
                    $ans=rtrim($ans,"<br/>");
                }else{
                    $ans=$value;
                }
                $content[$key]=$ans;
            }
            
            $where['person_id']=$_GET['id'];
            $id=$person->where($where)->save($content);
            //dump($_POST);exit();
            if($id>0){
                $this->success('更改成功',U('Person/index'));
            }
            else{
                $this->error('更改失败');
            }

    }
    /*
        方法名：delete
        作用  ：人物删除
     */
    public function delete(){
        $person=M('person');
        $sql='person_id='.$_GET['id'];
        $count=$person->where($sql)->delete();
        if($count>0){
            $this->success('删除成功',U('Person/index'));
        }
        else{
            $this->error('删除失败');
        }
    }
}