<?php
	class NewsModel extends Model{
    	protected $tableName = 'news';
    	protected $fields = array(
        //    'file_id', 'file_url', 'file_time', 'file_name', '_pk' => 'file_id', '_autoinc' => true
        );
        protected $_map = array(
    	    // 'id' =>'file_id', 
        	// 'url'=>'file_url', 
        	// 'time'=>'file_time', 
        	// 'name'=>'file_name',
	    );
        protected $_validate = array(
    		array('file_url','require','文件必须'), 
            );
	}
?>