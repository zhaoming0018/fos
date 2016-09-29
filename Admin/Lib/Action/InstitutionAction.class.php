<?php
/**
 * 机构管理类，用于处理与教育机构相关的事务
 */
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
                $this->success('添加成功',U('Institution/index'));
            }
            else{
                $this->error('添加失败');
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
                $this->success('更改成功',U('Institution/index'));
            }
            else{
                $this->error('更改失败');
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
            $this->success('删除成功',U('Institution/index'));
        }
        else{
            $this->error('删除失败');
        }
    }
}