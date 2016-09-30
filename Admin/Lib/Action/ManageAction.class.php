<?php 
	/**
	 * 管理模块，用于管理后台其他模块（未完善）
	 */
 header("Content-Type:text/html;charset=utf-8");
	class ManageAction extends CommonAction{
		function index(){
			$manage=M('Manage');
			$where['manage_use']=true;
			$res=$manage->where($where)->select();
			$this->assign("list",$res);
			$this->display();
		}
		function edit(){
			if(isset($_GET['id'])){
				$manage=M('manage');
				$res=$manage->find($_GET['id']);
				$this->assign('list',$res);
			}
			$this->display();
		}

		function doAdd(){
			$manage=M('manage');
			$manage->create();
			$manage->add();
		}
		function doEdit(){
			$manage=M('manage');
			$where['manage_id']=$_GET['id'];
			$manage->create();
			$manage->where($where)->save();
		}

		function delete(){
			$manage=M('Manage');
			$where['manage_id']=$_GET['id'];
			$data['manage_use']=0;
			$id=$manage->where($where)->save($data);
			if($id>0){
                echo "<h1>删除成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/Manage/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>删除失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
		}
	}
?>