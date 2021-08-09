<?php
require_once __DIR__ . "/../model/HomeModel.php";
class Home
{
    
    function index()
    {
        
        $obj = new HomeModel();
        $result=  $obj->Getall();
        require_once __DIR__ ."/../View/index.php";
    }
}
