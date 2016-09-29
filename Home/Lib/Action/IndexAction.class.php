<?php
// 主页显示类
class IndexAction extends CommonAction {
	/*
		用于显示主页
	 */
	public function test(){
		$info=M('Info');
		$where['info_name']='visit_count';
		$temp=$info->where($where)->find();
		$visit_count=$temp['info_int'];
		echo $visit_count;
	} 
	public function _before_index(){
		$info=M('Info');
		$where['info_name']='visit_count';
		$temp=$info->where($where)->find();
		$visit_count=$temp['info_int'];
		$new_count=$visit_count+1;
		$data['info_int']=$new_count;
		$info->where($where)->save($data);
		$this->assign('visitor_count',$visit_count);
	}
    public function index(){
    	$news=M("News");
    	/*
    		本科教育：bkjy;
    	 */
    	$where['news_category']=1;
    	$bkjy=$news->limit(10)->order("news_time desc")->where($where)->select();
    	$this->assign('bkjy',$bkjy);
    	/*
    		研究生教育：yjsjy;
    	 */
    	$where['news_category']=2;
    	$yjsjy=$news->limit(10)->order("news_time desc")->where($where)->select();
    	$this->assign('yjsjy',$yjsjy);
    	/*
    		学院新闻：xyxw;
    	 */
    	$where['news_category']=3;
    	$xyxw=$news->limit(8)->order("news_time desc")->where($where)->select();
    	$this->assign('xyxw',$xyxw);
    	/*
    		公告发文：ggfw;
    	 */
    	$where['news_category']=4;
    	$ggfw=$news->limit(8)->order("news_time desc")->where($where)->select();
    	$this->assign('ggfw',$ggfw);
    	/*
    		学生活动：xxhd;
    	 */
    	$where['news_category']=5;
    	$xxhd=$news->limit(8)->order("news_time desc")->where($where)->select();
    	$this->assign('xxhd',$xxhd);
    	// dump($xxhd);
    	// exit();
		
		/*
			图片轮播
		*/
		$pic=M('pic');
		
		$data=$pic->limit(3)->order("pic_id desc")->select();
		$this->assign("data",$data);
		//var_dump($data);
		//var_dump(get_defined_constants(true));
		$this->display();
	}
	/*
		空操作，用于显示各个子主页
	 */
	public function _empty($name){
		$url='Index/'+$name;
		$this->display($url);
	}
}