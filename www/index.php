<?php

define('GAPP_BASENAME', __DIR__.'/..');
define('GAPP_BASENAME_C', str_replace('\\','/',__DIR__.'/..'));
define('GAPP_LIBS_DIR', GAPP_BASENAME.'/'.'libs');
define('GAPP_SMARTY_DIR', GAPP_BASENAME.'/'.'Smarty');
//载入smarty类
require_once GAPP_LIBS_DIR.'/'.'Smarty'.'/'.'Smarty.class.php';
//载入自动加载
require_once GAPP_BASENAME.'/'.'Common/Autoload/Autoload.class.php';
\Common\Autoload\Autoload::start();

\App\App::run();



?>