<?php
namespace Common\Controller;
class BaseController{
	protected $renderValues = array();
	private $view = null;
	final function __construct(){

		//用php模板
		$this->view = new \Common\Tpl\PhpEngine();

		/*
		//设置smarty模板
		$this->view = \Common\Tpl\SmartyEngine::getEngine();
		*/
	}
	function init(){
		
	}

	function setRenderValues($key,$val=null){
		if(!is_array($this->renderValues)){
			$this->renderValues = (array)$this->renderValues;
		}
		if(is_array($key)){
			foreach ($key as $k => $v) {
				$this->renderValues[$k] = $v;
			}
		}else{
			$this->renderValues[$key] = $val;
		}
	}
	function render($template=null){
		
		$controller = $GLOBALS['controller'];
		$action = $GLOBALS['action'];
		
		//拼装模板文件名
		//Controller\IndexCon->indexAction   ===>>>   View/Index/index.tpl
		
		//App/View/Index/Index.php 控制器主模板
		//这个根据需求再做调整 目前是先调用控制器主模板,然后根据情况在load需求模板
		$tplName = $controller.'.php';

		$this->setRenderValues('controller',$controller);
		$this->setRenderValues('action',$action);
		if($template)$tplName = $template;
		$pageHtml = $this->view->fetch($this->renderValues,$tplName);
		echo $pageHtml;

	}
}