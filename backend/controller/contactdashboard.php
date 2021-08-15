<?php
require_once __DIR__ . "/../model/ContactModel.php";
session_start();
class Contactdashboard
{
    function index()
    {
        $obj = new ContactModel();
        $result=$obj->GetAll();
        require_once __DIR__ ."/../View/Dashboard/contactdashboard.php";
    }
    function delete()
    {

    }
}