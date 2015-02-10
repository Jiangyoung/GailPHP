<?php
namespace Common\Database;
class Database{
	static public $db = false;
	function __construct(){
		$dbConfig = \Common\Config\ConfigHelper::getConfigs('db');
		if(!self::$db){
			self::$db = new mysqli($dbConfig['host'],$dbConfig['user'],$dbConfig['pwd'],$dbConfig['dbname']);
		}
	}
}

?>