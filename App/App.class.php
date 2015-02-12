<?php
namespace App;
class App{
	static function run(){

		$controller = \Common\Http\Http::getGET('c','index');
		$action  = \Common\Http\Http::getGET('a','index');

		$GLOBALS['controller'] = $controller = ucwords(strtolower($controller));
		$GLOBALS['action'] = $action = strtolower($action);

		$allowCA = \Common\Config\ConfigHelper::getConfigs('allowca');
		if(!array_key_exists($controller, $allowCA)){
			\Common\Http\Http::redirect(404);
		}
		if(!in_array($action, $allowCA[$controller])){
			\Common\Http\Http::redirect(404);
		}

		
		$className = '\\App\\Controller\\'.$controller.'Con';
		$action .= 'Action';

		$class = new $className();
		$class->init();
		$class->$action();
	}
}
