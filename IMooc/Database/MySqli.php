<?php
/**
 * Created by PhpStorm.
 * User: maosilu
 * Date: 2017/12/26
 * Time: 下午6:14
 */
namespace IMooc\Database;

use IMooc\IDatabase;

class MySqli implements IDatabase{

    protected $conn;

    function connect($host, $user, $passwd, $dbname){
        $conn = mysqli_connect($host, $user, $passwd);
        mysqli_select_db($conn, $dbname);
        mysqli_set_charset($conn, 'utf-8');
        $this->conn = $conn;
    }

    function query( $sql){
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    function close(){
        mysqli_close($this->conn);
    }
}