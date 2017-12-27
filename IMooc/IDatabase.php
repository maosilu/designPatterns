<?php
/**
 * 数据库接口
 * User: maosilu
 * Date: 2017/12/27
 * Time: 上午10:01
 */
namespace IMooc;

interface IDatabase{

    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}