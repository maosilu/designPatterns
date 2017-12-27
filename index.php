<?php
// $db = IMooc\Factory::createDatabase(); // 工厂模式
//$db = IMooc\Database::getInstance(); // 单例模式：此时这里无论调用多少次，都只会建立一次到数据库的连接
//$db = \IMooc\Register::get('db1'); // 注册树模式调用

//适配器模式调用MySqli的连接方式
$db = new \IMooc\Database\MySqli();
$db->connect('127.0.0.1', 'username', 'passwd', 'test');
$db->query('show databases');
$db->close();
