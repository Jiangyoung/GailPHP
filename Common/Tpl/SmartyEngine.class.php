<?php
namespace Common\Tpl;

class SmartyEngine{
	static public $objSmarty = false;
	public function __construct(){
		if(!self::$objSmarty){
			//引入Smarty模板类库
			self::$objSmarty = new \Smarty();
			$smartyConfig = \Common\Config\ConfigHelper::getConfigs('smarty');		
			self::$objSmarty->compile_dir 		= $smartyConfig['compile_dir'];
			self::$objSmarty->cache_dir 		= $smartyConfig['cache_dir'];
			self::$objSmarty->left_delimiter 	= $smartyConfig['left_delimiter'];
			self::$objSmarty->right_delimiter 	= $smartyConfig['right_delimiter'];
			self::$objSmarty->caching 			= $smartyConfig['isCached'];
		}
	}
	public function getEngine(){
		return self::$objSmarty;
	}
}