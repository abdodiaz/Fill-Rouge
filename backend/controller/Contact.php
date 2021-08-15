<?php
require_once __DIR__ . "/../model/ContactModel.php";
session_start();
class Contact
{
    function index()
    {
        require_once __DIR__ ."/../View/contact.php";
    }
    function create()
    {
        if(isset($_POST['sub'])) 
        {
        $obj = new ContactModel();
        $obj->setNom($_POST['name']);
        $obj->setPrenom($_POST['surname']);
        $obj->setEmail($_POST['email']);
        $obj->setBesoin($_POST['need']);
        $obj->setMessage($_POST['message']);
        $obj->create();
        $_SESSION["contact"]=true;
        header("Location:http://localhost/Fill-Rouge/backend/contact ");
        }
    }
}