<?php
/**
 * 新闻模块，用于处理与新闻相关的事务
 */
  header("Content-Type:text/html;charset=utf-8");
class NewsAction extends CommonAction {
    /*
        方法名：index
        作用  ：用于后台新闻列表的显示
     */
    public function index(){
    	$news=M('News');
    	$category=M('Category');
        $field=array(
            'news_id'=>'id',
    		'news_title'=>'title',
    		'news_category'=>'category',
    		'news_time'=>'time',
    		'news_content'=>'content',
    	);
        $where["news_category"]=$_GET["category"];
        import('ORG.Util.Page');
        if(isset($_GET["category"])){
            $count      = $news->where($where)->count();
            $Page       = new Page($count,20);
            $list = $news->where($where)->field($field)->order('news_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        else{
            $count      = $news->count();
            $Page       = new Page($count,20);
            $list = $news->field($field)->order('news_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        $Page->setConfig('prev','&lt;');
        $Page->setConfig('next','&gt;');
        $Page->setConfig('theme','%upPage%  %first%  %prePage%    %linkPage%    %nextPage%   %downPage% %end%');
        $show       = $Page->show();
        $t=0;
        foreach($list as $x){
            $temp=$category->find($x['category']);
            $x['category']=$temp['category_name'];
            $list[$t]=$x;
            $t++;
        }  
        $this->assign('list',$list);
        $this->assign('page',$show);
		$this->assign('title','新闻管理');
        $this->display();
    }
    /*
        方法名：doAdd
        作用  ：添加新闻
     */
    public function doAdd(){
            $news=M('News');
            $data=array(
                'news_title'=>$_POST['title'],
                'news_time'=>time(),
                'news_content'=>$_POST['editorValue'],
                'news_category'=>$_POST['category'],
            );
            $id=$news->add($data);
            if($id>0){
                echo "<h1>文章添加成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/News/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>文章添加失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
    /*
        方法名：edit
        作用  ：初始化编辑页
     */
    public function edit(){
            $this->assign('category',M('Category')->select());
            $news=M('News');
            $res=$news->find($_GET['id']);
            $this->assign('news',$res);
			$this->assign('title','新闻编辑');
            $this->display();
    }
    /*
        方法名：doEdit
        作用  ：完成编辑，新闻更新
     */
    public function doEdit(){
            $news=M('News');
            $data=array(
                'news_title'=>$_POST['title'],
               // 'news_time'=>time(),
                'news_content'=>$_POST['editorValue'],
                'news_category'=>$_POST['category']
            );
            $sql='news_id='.$_GET['id'];
            $id=$news->where($sql)->save($data);
            if($id>0){
                echo "<h1>更改成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/News/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>更改失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
    /*
        方法名：delete
        作用  ：新闻删除
     */
    public function delete(){
        $news=M('News');
        $sql='news_id='.$_GET['id'];
        $count=$news->where($sql)->delete();
        if($count>0){
                echo "<h1>删除成功</h1>";
                echo "<script>setTimeout(function(){location.href='/fos/admin.php/News/index';},1000);</script>";
                exit();
            }
            else{
                echo "<h1>删除失败</h1>";
                echo "<script>setTimeout(function(){history.go(-1);},1000);</script>";
                exit();
            }
    }
}