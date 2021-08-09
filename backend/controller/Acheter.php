<?php
require_once __DIR__ . "/../model/AcheterModel.php";
class Acheter
{
    
    function index()
    {
        
        $obj = new AcheterModel();
        $result=  $obj->Getall();
        require_once __DIR__ ."/../View/Acheter.php";
    }
}
