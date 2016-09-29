<?php
    class DepartmentAction extends CommonAction{
        public function index(){
            $department=M('Department');
            $field=array(
                'department_id'=>'id',
                'department_name'=>'name',
                'department_time'=>'time',
                'department_content'=>'content',
            );
            import('ORG.Util.Page');
            $count      = $department->count();
            $Page       = new Page($count,20);
            $Page->setConfig('prev','&lt;');
            $Page->setConfig('next','&gt;');
            $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
            $show       = $Page->show();
            $list=$department->field($field)->order('department_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->assign('title','系科管理');
            $this->display();
        }
        public function doAdd(){
            $data=array(
                'department_name'=>$_POST['name'],
                'department_time'=>time(),
                'department_content'=>$_POST['editorValue'],
            );
            $Department=M('Department');
            $id=$Department->add($data);
            if($id>0){
                $this->success('添加成功',U('Department/index'));
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
            $Department=M('Department');
            $res=$Department->find($_GET['id']);
            $this->assign('Department',$res);
			$this->assign('title','系科编辑');
            $this->display();
        }
        
        /**
         * 用于处理修改结果
         * @return null
         */
        public function doEdit(){
            $Department=M('Department');
            $data=array(
                'department_name'=>$_POST['name'],
                'department_time'=>time(),
                'department_content'=>$_POST['editorValue'],
            );
            $sql='department_id='.$_GET['id'];
            $id=$Department->where($sql)->save($data);
            if($id>0){
                $this->success('更改成功',U('Department/index'));
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
            $Department=M('department');
            $sql='department_id='.$_GET['id'];
            $count=$Department->where($sql)->delete();
            if($count>0){
                $this->success('删除成功',U('Department/index'));
            }
            else{
                $this->error('删除失败');
            }
        }
    }