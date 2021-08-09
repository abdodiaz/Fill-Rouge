<?php
require_once __DIR__ . "/../model/UserModel.php";
session_start();
class Adminconnect
{
    function index()
    {
    
        require_once __DIR__ ."/../View/Dashboard/login.php";
        
       
    }

    function authentification()
    {
        $obj = new UserModel();
        $obj->setEmail($_POST["Email"]);
        $obj->setPassword(md5($_POST["Password"]));
        $value = $obj->GetAll();
        if (!empty($value))
        {
            $_SESSION["logincheck"]=True;
            $_SESSION["Email"]=$_POST["Email"];
            header('Location:http://localhost/fill-Rouge/backend/dashboard');

        }
        else{ 
            echo "incorrect";
        }
    }   
}
