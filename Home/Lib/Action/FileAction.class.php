<?php
	class FileAction extends CommonAction{
		public function index(){
			$file=M('Upfile');
			$filecate=M('Filecate');
			import('ORG.Util.Page');// 导入分页类			
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			if(isset($_GET['id'])){
				$where_cate['filecate_id']=$_GET['id'];
				$filecate=$filecate->where($where_cate)->find();
				$titlename=$filecate['filecate_name'];
			    $where["file_category"]=$_GET['id'];
			    $count      = $file->where($where)->count();// 查询满足要求的总记录数
			    $Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
			    $Page->setConfig('prev','&lt;');
			    $Page->setConfig('next','&gt;');
			    $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
			    $show       = $Page->show();// 分页显示输出
			$list = $file->where($where)->order('file_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}else{
				$titlename="下载中心";
				$count      = $file->count();// 查询满足要求的总记录数
				$Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('prev','&lt;');
				$Page->setConfig('next','&gt;');
				$Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
				$show       = $Page->show();// 分页显示输出
				$list = $file->order('file_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}
// 			dump($list);
// 			exit();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('titlename',$titlename);
		    $this->display();
		}
	}
?>