<?php
/**
注册树模式的演示：
注册树模式：用来将一些对象注册到全局的树上，这些对象就可以用来被任何地方直接去访问
*/
namespace IMooc;

class Register{

    protected $objects;

	/**
     * 将一个对象注册到全局的树上
     * @param string $alias 对象别名
	*/
	static function set($alias, $object){
        self::$objects[$alias] = $object; //把对象放在这棵$objects树上
	}

	static function get($alias){
	    return self::$objects[$alias];
    }

	function _unset($alias){
        unset(self::$objects[$alias]); //把对象从$objects这棵树上移走
	}
}