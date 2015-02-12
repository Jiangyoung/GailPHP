GailPHP 
目录结构：
-
	App
	>	Controller	--	控制器目录

		>>	IndexCon.class.php
		>>	...

	>	Model	--	模型目录

	>	View	--	视图目录
		Index.php 	控制器Index的主模板
		...

	Common	--	公共类目录
		>>	Autoload	--	处理类的自动加载
		>>	Config		--	配置文件
		>>	Controller	--	控制器基础类
		>>	Database	--	数据库操作类
		>>	Http		--	http分析与跳转的一些基础
		>>	Tpl			--	模板引擎类

	libs	--	外部类目录

	Smarty	--	Smarty 	--	弃用

	www		--	主目录
		>>	index.php 	--	入口文件
		>>	404.php 	--	404页面
