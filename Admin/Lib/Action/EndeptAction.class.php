<?php
/**
 * 机构管理类，用于处理与教育机构相关的事务
 */
class EndeptAction extends CommonAction {
    /**
     * 用于显示所有已添加的机构
     * @return null
     */
    public function index(){
    	$department=M('department');
    	$category=M('Category');
        $field=array(
            'department_id'=>'id',
    		'department_time'=>'time',
    		'department_name_en'=>'name',
    		'department_content_en'=>'content',
    	);
        import('ORG.Util.Page');// 导入分页类
        $count      = $department->count();// 查询满足要求的总记录数
        $Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('prev','&lt;');
        $Page->setConfig('next','&gt;');
        $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $department->field($field)->order('department_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $t=0;
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
		$this->assign('title','英语部门');
        $this->display();
    }
    
    /**
     * 用于添加机构
     * @return null 
     */
    public function doAdd(){
            $department=M('department');
            // dump($_POST);
            // exit();
            $data=array(
                'department_name_en'=>$_POST['name'],
                'department_time'=>time(),
                'department_content_en'=>$_POST['editorValue'],
            );
            $id=$department->add($data);
            if($id>0){
                $this->success('添加成功',U('Endept/index'));
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
           	$department=M('department');
            $res=$department->find($_GET['id']);
            $this->assign('department',$res);
			$this->assign('title','英语部门编辑');
            $this->display();
    }
    
    /**
     * 用于处理修改结果
     * @return null 
     */
    public function doEdit(){
            $department=M('department');
            $data=array(
                'department_name_en'=>$_POST['name'],
                'department_time'=>time(),
                'department_content_en'=>$_POST['editorValue'],
            );
            $sql='department_id='.$_GET['id'];
            $id=$department->where($sql)->save($data);
            if($id>0){
                $this->success('更改成功',U('Endept/index'));
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
        $department=M('department');
        $sql='department_id='.$_GET['id'];
        $count=$department->where($sql)->delete();
        if($count>0){
            $this->success('删除成功',U('Endept/index'));
        }
        else{
            $this->error('删除失败');
        }
    }
}