<?php
/**
 * 机构管理类，用于处理与教育机构相关的事务
 */
  header("Content-Type:text/html;charset=utf-8");
class InstitutionAction extends CommonAction {
    public function index(){
    	$institution=M('Institution');
    	$category=M('Category');
        $field=array(
            'Institution_id'=>'id',
    		'Institution_time'=>'time',
    		'Institution_name'=>'name',
    		'Institution_content'=>'content',
    	);
        import('ORG.Util.Page');
        $count      = $institution->count();
        $Page       = new Page($count,20);
        $Page->setConfig('prev','&lt;');
        $Page->setConfig('next','&gt;');
        $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
		//dump($Page);
        $show       = $Page->show();
        $list = $institution->field($field)->order('institution_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $t=0;
        $this->assign('list',$list);
        $this->assign('page',$show);
		$this->assign('title','机构管理');
        $this->display();
    }
    
    public function doAdd(){
            $institution=M('Institution');
            // dump($_POST);
            // exit();
            $data=array(
                'institution_name'=>$_POST['name'],
                'institution_time'=>time(),
                'institution_content'=>$_POST['editorValue'],
            );
            $id=$institution->add($data);
            if($id>0){
                echo "<h1>添加成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/Institution/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>添加失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
    /**
     * 用于显示编辑页面
     * @return null 
     */
    public function edit(){
           	$institution=M('Institution');
            $res=$institution->find($_GET['id']);
            $this->assign('institution',$res);
			$this->assign('title','机构编辑');
            $this->display();
    }
    
    /**
     * 用于处理修改结果
     * @return null 
     */
    public function doEdit(){
            $institution=M('Institution');
            $data=array(
                'institution_name'=>$_POST['name'],
                'institution_time'=>time(),
                'institution_content'=>$_POST['editorValue'],
            );
            $sql='institution_id='.$_GET['id'];
            $id=$institution->where($sql)->save($data);
            if($id>0){
                echo "<h1>编辑成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/Institution/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>编辑失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
    /**
     * 用于删除机构
     * @return null 
     */
    public function delete(){
        $institution=M('institution');
        $sql='institution_id='.$_GET['id'];
        $count=$institution->where($sql)->delete();
        if($count>0){
                echo "<h1>删除成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/Institution/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>删除失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
}