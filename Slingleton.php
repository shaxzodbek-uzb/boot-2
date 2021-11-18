<?php

class DB {
    protected static $instance;

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
var_dump($db);
unset($db);

$db = DB::getInstance();
$db->setType('Mongo');
var_dump($db);

$db->connect();
require './index.php';