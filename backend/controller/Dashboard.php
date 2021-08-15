<?php
require_once __DIR__ . "/../model/DashboardModel.php";
session_start();
class Dashboard
{
    function index()
    {
        if (isset($_SESSION["logincheck"])) {
            $obj = new DashboardModel();
            $contact = $obj->Getall('contact');
            $vendeur = $obj->Getall('vendeur');
            $voiture = $obj->Getall('voiture_vendre');
            require_once __DIR__ . "/../View/Dashboard/dashboard.php";
        } else {
            require_once __DIR__ . "/../View/Dashboard/login.php";
        }
    }
    function logout()
    {
        session_destroy();
        require_once __DIR__ . "/../View/Dashboard/login.php";
    }
}
