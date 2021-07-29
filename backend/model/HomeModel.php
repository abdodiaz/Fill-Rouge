<?php
require __DIR__ . "/../Config.php";
class HomeModel{
    function __construct()
    {
        $this->con=new Config();
    }
    function Getall(){
        $select="SELECT * FROM `voiture_vendre` LIMIT 5";
        $result= $this->con->connection($select);
        return $result->fetchall(PDO::FETCH_ASSOC);
    }
}