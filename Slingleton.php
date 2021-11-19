<?php

class DB {
    protected static $instance;
    function __clone(){
        throw new Exception("You can't clone singleton object", 1);
    }
    protected $db_type;
    public function setType(string $type)
    {
        $this->db_type = $type;
    }
    public function connect()
    {
        echo "Connected to $this->db_type server";
    }
    static public function getInstance()
    {
        if(!self::$instance){
            self::$instance = new DB();
        }

        return self::$instance;
    }
}

$db = DB::getInstance();
$db->setType('PostgreSQL');
$db2 = clone $db;
$db->setType('MongoDB');

var_dump($db);
var_dump($db2);
unset($db);

// $db = DB::getInstance();
// $db->setType('Mongo');
// var_dump($db);
// 
// $db->connect();
// require './index.php';