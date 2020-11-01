<?php

require_once("../db_defines.php");

class DB
{
    public $db;
    public $user;
    public $pass;
    public $host;
    public $tablename;

    public function __contruct($_host, $_user, $_pass, $_tablename)
    {
        $this->user = $_user;
        $this->pass = $_pass;
        $this->host = $_host;
        $this->tablename = $_tablename;
        $this->db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_) or die("Не могу соединиться с MySQL.");
    }

    public function __destruct()
    {
        mysqli_close($this->db);
    }

    public function __debugInfo()
    {
        return array(
            'DataBase' => $this->db,
            'DB username' => $this->user,
            'DB host' => $this->host,
            'DB table name' => $this->tablename
        );
    }
}
