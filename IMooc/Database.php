<?php
/**
单例模式演示
*/
namespace IMooc;

class Database{

	protected $db;
	private function __construt(){
		//这样就屏蔽了数据库类在其他地方去new
	}

	static function getInstance(){
		if(self::$db){
			return self::$db;
		}else{
			self::$db = new self();
			return self::$db;
		}
	}
}