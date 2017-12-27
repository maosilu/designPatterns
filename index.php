<?php
require_once './IMooc/UserStrategy.php';
require_once './IMooc/FemaleUserStrategy.php';
require_once './IMooc/MaleUserStrategy.php';

// $db = IMooc\Factory::createDatabase(); // 工厂模式
//$db = IMooc\Database::getInstance(); // 单例模式：此时这里无论调用多少次，都只会建立一次到数据库的连接
//$db = \IMooc\Register::get('db1'); // 注册树模式调用

//适配器模式调用MySqli方式操作数据库
//$db = new \IMooc\Database\MySqli();
//适配器模式调用PDO方式操作数据库
/*$db = new \IMooc\Database\PDO();
$db->connect('127.0.0.1', 'username', 'passwd', 'test');
$db->query('show databases');
$db->close();*/

//策略模式的使用
class Page{

    /**
     * @var \IMooc\UserStrategy
     * */
    protected $strategy;

    function index(){
        echo 'AD:';
        $this->strategy->showAd();
        echo "<br/>";

        echo 'Category:';
        $this->strategy->showCategory();
    }

    function setStrategy(IMooc\UserStrategy $strategy){
        $this->strategy = $strategy;
    }
}

$page = new Page();
if(isset($_GET['female'])){
    $strategy = new IMooc\FemaleUserStrategy();
}else{
    $stragegy = new IMooc\MaleUserStrategy();
}
$page->setStrategy($stragegy);
$page->index();
