<?php
namespace App\Controller;
class IndexCon extends \Common\Controller\BaseController{
	function indexAction(){
		$this->assign('key1','val1');
		$this->assign('title','index');
		$this->display();
	}
}