<?php
	//新闻显示类
	class NewsAction extends CommonAction{
		public function index(){
			$news=M('News');
			$where['news_id']=$_GET['newsid'];
			$info=$news->where($where)->find();
			$data["news_count"]=$info["news_count"]+1;
			$news->where($where)->save($data);
			$info=$news->where($where)->find();
			$this->assign("news",$info);
			$this->display();
		}
		public function listn(){
		    import('ORG.Util.Page');
		    $news=M('News');
		    $category=M('Category');
		    $id=isset($_GET["id"])?$_GET["id"]:1;
		    $cat_name=$category->find($id);
		    $cat_name=$cat_name["category_name"];
		    $this->assign("cat_name",$cat_name);
		    $where["news_category"]=$id;
		    $count      = $news->where($where)->count();// 查询满足要求的总记录数
		    $Page       = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
		    $Page->setConfig('prev','&lt;');
		    $Page->setConfig('next','&gt;');
		    $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
		    $show= $Page->show();
		    $list = $news->where($where)->order('news_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign("page",$show);
		    $this->assign("list",$list);
			$this->display();
		}
	}
?>