<?php
// $db = IMooc\Factory::createDatabase();
$db = IMooc\Database::getInstance(); //此时这里无论调用多少次，都只会建立一次到数据库的连接

