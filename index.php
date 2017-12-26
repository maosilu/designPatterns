<?php
// $db = IMooc\Factory::createDatabase(); // 工厂模式
//$db = IMooc\Database::getInstance(); // 单例模式：此时这里无论调用多少次，都只会建立一次到数据库的连接
$db = \IMooc\Register::get('db1'); // 注册树模式调用
