<?php
namespace Common\Http;
class Http{
	static function getGET($key,$default=false)
	{
		return isset($_GET[$key])?htmlspecialchars($_GET[$key]):$default;
	}
	static function getPOST($key,$default=false)
	{
		return isset($_POST[$key])?htmlspecialchars($_POST[$key]):$default;
	}
	static function redirect($url){
		if(404 == $url){
			header('Location: '.'404.php');exit;
		}
			header('Location: '.$url);
		
		
	}
}


?>