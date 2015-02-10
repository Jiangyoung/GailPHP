<?php
namespace Common\Database;
class Database{
	private $conn = null;
	function __construct(){
		$dbConfig = \Common\Config\ConfigHelper::getConfigs('db');

		$this->conn = new mysqli($dbConfig['host'],$dbConfig['user'],$dbConfig['pwd'],$dbConfig['dbname']);
		if(mysqli_connect_errno()){
			printf ( "Connect failed: %s\n" , mysqli_connect_error());
			exit();
		}
		if (! $mysqli -> set_charset ( "utf8" )) {
		     printf ( "Error loading character set utf8: %s\n" ,  $mysqli -> error );
		} else {
		     printf ( "Current character set: %s\n" ,  $mysqli -> character_set_name ());
		}
	}

	function execute_dql($sql)
	{
		$res = $this->conn->query($sql);
		var_dump($res);
	}
	function execute_dml($sql)
	{
		$res = $this->conn->query($sql);
		var_dump($res);
	}



	function __destruct(){
		$this->db->close();
	}
}

?>