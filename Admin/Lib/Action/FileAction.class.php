<?php
	/**
	 * 文件管理模块，用于处理上传文件的事务
	 */
	class FileAction extends CommonAction{
		/**
		 * 用于显示所有分类下的文件
		 * @return  null
		 */
		public function index(){
			$file=M('upfile');	
			$filecate = M('filecate');
			import('ORG.Util.Page');// 导入分页类
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$where["file_category"]=$_GET['filecate'];
			if(isset($_GET['filecate'])){
				$count      = $file->where($where)->count();// 查询满足要求的总记录数
				$Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('prev','&lt;');
				$Page->setConfig('next','&gt;');
				$Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
				$show       = $Page->show();// 分页显示输出
				$list = $file
				->join('lxy_filecate ON lxy_upfile.file_category = lxy_filecate.filecate_id')	
				->where($where)->order('file_time desc')->limit($Page->firstRow.','.$Page->listRows)
				
				->select();
			}else{
				$count      = $file->count();// 查询满足要求的总记录数
				$Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('prev','&lt;');
				$Page->setConfig('next','&gt;');
				$Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
				$show       = $Page->show();// 分页显示输出
				$list = $file
				->join('lxy_filecate ON lxy_upfile.file_category = lxy_filecate.filecate_id')	
				->order('file_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('title','文件');
			$this->display();
		}
		
		/**
		 * 用于显示文件上传的页面
		 */
		public function add(){
			$file=M('Upfile');
			$filecate=M('filecate');
			$res=$filecate->select();
			$this->assign("filecate",$res);
			$this->assign('title','文件上传');
			$this->display("upload");
		}
		
		/**
		 * 用于处理文件的上传
		 * @return null
		 */
		public function doAdd(){
			$file=M('Upfile');

			import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->savePath =  './Public/upload/file/';// 设置附件上传目录
            $upload->saveRule = time;
            if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
            }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            }
			$data=array(
				'file_name'=>$_FILES['photo']['name'],
				'file_category'=>$_POST['file_category'],
				'file_path'=>$info[0]['savename'],
				'file_time'=>time()
			);
			$id=$file->add($data);	
			if($id>0){
				$this->success('文件添加成功',U('File/index'));
			}else{
				$this->error('文件添加失败');
			}
		}

		/**
		 * 用于删除文件
		 * @return null
		 */
		public function delete(){
			$file=M('Upfile');
			$where['file_id']=$_GET['id'];
			$res=$file->find($_GET['id']);
			$path='./Public/upload/file/'.$res['file_path'];
			if(!unlink($path)){
				$file->where($where)->delete();
				$this->error('没有本地文件',U('File/index'));
			}
			$count=$file->where($where)->delete();
			if($count>0){
				$this->success('删除成功',U('File/index'));
			}
			else{
				$this->error('删除失败');
			}
		}
	}
?>