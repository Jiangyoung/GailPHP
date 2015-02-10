<?php
namespace Common\Controller;
class BaseController{
	private $view = null;
	final function __construct(){
		//初始化smarty模板
		$smartyEngine = new \Common\Tpl\SmartyEngine();
		$this->view = $smartyEngine->getEngine();
	}
	function init(){

	}
	function assign($key,$val){
		$this->view->assign($key,$val);
	}
	function display(){
		$controller = $GLOBALS['controller'];
		$action = $GLOBALS['action'];
		
		//拼装模板文件名
		//Controller\IndexCon->indexAction   ===>>>   View/Index/index.tpl
		$tplName = GAPP_BASENAME.'/'.'App/View/'.$controller.'/'.$action.'.tpl';
		
		$this->view->display($tplName);
	}
}