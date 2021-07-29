<?php
require_once __DIR__ . "/../model/UserModel.php";
class User
{

    function authentification()
    {
        $obj = new UserModel();
        $obj->setEmail($_POST["Email"]);
        $obj->setPassword(md5($_POST["Password"]));
        $value = $obj->GetAll();
        if (!empty($value))
        {
        }
        else{ }
    }   
}
