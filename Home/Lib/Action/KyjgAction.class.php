<?php
	class KyjgAction extends CommonAction{
		public function kyjg(){
			$institution=M('Institution');
			$res=$institution->select();
			$this->assign('list',$res);
			// dump($institution);
			// exit();
			$this->display();
		}
		public function show(){
			$institution=M('Institution');
			$list=$institution->select();
			$this->assign('list',$list);
			$res=$institution->find($_GET['id']);
			$this->assign('institution',$res);
			// dump($institution);
			// exit();
			$this->display();
		}
//应用系统分析研究所
		public function yyxtfx(){
			$institution=M('Institution');
			$list=$institution->select();
			$this->assign('list',$list);
			$this->display();
		}
	}
?>