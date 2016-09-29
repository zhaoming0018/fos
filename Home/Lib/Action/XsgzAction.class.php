<?php
	class XsgzAction extends CommonAction{
		public function xsgz(){
			$this->display();
		}
		/*
			规章制度
		 */
		public function gzzd(){
			$news=M('News');
			if($_GET['title']==NULL){
				$category=M('Category');
				import('ORG.Util.Page');// 导入分页类
			    $where["news_category"]=6;//规章制度在数据库中id为6
			    $count      = $news->where($where)->count();// 查询满足要求的总记录数
			    $Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
			  	$Page->setConfig('prev','&lt;');
			  	$Page->setConfig('next','&gt;');
			  	$Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
			  	$show       = $Page->show();// 分页显示输出
				$list = $news->where($where)->order('news_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('list',$list);// 赋值数据集
				$this->assign('page',$show);// 赋值分页输出
				$this->display();
			}else{
				$where['news_title']=$_GET['title'];
				$res=$news->where($where)->find();
				if(!$res){
					$this->error('没有此规章制度');
				}else{
					$this->assign('news',$res);
					$this->display();
				}
			}
		}
	}
?>