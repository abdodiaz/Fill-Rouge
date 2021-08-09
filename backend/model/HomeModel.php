<?php
require __DIR__ . "/../Config.php";
class HomeModel{
    function __construct()
    {
        $this->con=new Config();
    }
    function Getall(){
        $select="SELECT * FROM `voiture` ";
        $z= $this->con->connect($select);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
}