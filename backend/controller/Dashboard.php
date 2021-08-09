<?php
require_once __DIR__ . "/../model/DashboardModel.php";
//session_start();
class Dashboard
{
    function index()
    {
        $obj= new DashboardModel();
     $contact= $obj->Getall('contact');
     $vendeur= $obj->Getall('vendeur');
     $voiture= $obj->Getall('voiture_vendre');
    require_once __DIR__ ."/../View/Dashboard/dashboard.php";
    }
}