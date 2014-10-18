<?php
class Db{
	public function connect(){
		$mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if($mysql->connect_error){
			trigger_error("Database connection failed : ".$mysql->connect_error, E_USER_ERROR);
		}
		return $mysql;
	}
}