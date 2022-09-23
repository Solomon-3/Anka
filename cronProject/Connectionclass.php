<?php
class Connectionclass extends mysqli{
    private $host="localhost",$username="root",$password="",$dbname="group_31";
    public $con;
    function __construct() {
        $this->con = $this->connect($this->host, $this->username,$this->password,$this->dbname);
    }




    }

