<?php
require_once __DIR__ . "/../model/voituredashboardModel.php";
class voituredashboard
{
    
    function index()
    {
        $obj=new voituredashboardModel;
        $result=$obj->getAll();
        require_once __DIR__ ."/../View/Dashboard/voiturevendre.php";
    }
    
}
