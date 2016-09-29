<?php
	class TagLibMessage extends TagLib{
		protected $tages ={
			'verify'=>array('attr'=>'width,height',0);
		}
		public function _verify($attr){
        	$tag    = $this->parseXmlAttr($attr,'verify');
	        $width   =   $tag['width'];
	        $height    =    $tag['height'];
	 		$str = "<img src='__ROOT__/Home/Public/verify?w={$width}&h={$height}' onclick='this.src=this.src+\"?\"+Math.random()' />";
	        return $str;
    	}

	}
?>