<?php
require __DIR__ . "/../Config.php";

class DashboardModel
{   
    function __construct()
    {
        $this->con = new Config();
    }
    function Getall($table){
        $select="SELECT COUNT(Id) FROM ".$table;
        $z= $this->con->connect($select);
        return $z->fetchColumn(); 

    }
}