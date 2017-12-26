<?php
/**
工厂模式演示
*/
namespace IMooc;

class Factory{
	static function createDatabase(){
		// $db = new Database(); //工厂模式
		$db = Database::getInstance(); // 在工厂模式中使用单例模式
        Register::set('db1', $db); // 使用注册树模式
		return $db;
	}
}