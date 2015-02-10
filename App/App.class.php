<?php
namespace App;
class App{
	static function run(){

		$controller = \Common\Http\Http::getGET('c','index');
		$action  = \Common\Http\Http::getGET('a','index');
		
		$GLOBALS['controller'] = $controller = ucwords(strtolower($controller));
		$GLOBALS['action'] = $action = strtolower($action);
		
		$className = '\\App\\Controller\\'.$controller.'Con';
		$action .= 'Action';

		$class = new $className();
		$class->init();
		$class->$action();
	}
}
