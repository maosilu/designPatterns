<?php
/**
 * Created by PhpStorm.
 * User: maosilu
 * Date: 2017/12/26
 * Time: 下午6:14
 */
namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase{

    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $dbh = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $dbh;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return $this->conn->query($sql);

    }

    function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }


}