<?php
namespace Common\Redirector;
class Redirector{
	static function redirect($url){
		header("Location:{$url}");
	}
}