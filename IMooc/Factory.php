<?php
/**
工厂模式演示
*/
namespace IMooc;

class Factory{
	static function createDatabase(){
		$db = new Database();
		return $db;
	}
}