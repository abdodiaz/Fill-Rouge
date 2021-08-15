<?php
require_once __DIR__ . "/../model/vendeurdashModel.php";

class vendeurdashboard
{
    function index()
    {
        // if (isset($_SESSION["logincheck"])) {
        $obj = new vendeurdashModel;
        $result = $obj->GetAll();
        require_once __DIR__ . "/../View/Dashboard/Vendeurdash.php";
        // }else {
            // require_once __DIR__ . "/../View/Dashboard/login.php";
        // }
    }
    function create()
    {
        if(isset($_POST["submit"]))
        {
            $obj= new vendeurdashModel();
            $obj->insert($_POST["Nom"],$_POST["Prenom"],$_POST["Email"],$_POST["Tele"],$_POST["Ville"]);
            header("Location:http://localhost/fill-Rouge/backend/vendeurdashboard");
        }
    }
    function delete()
    {

    }
    function edit()
    {

    }
    function update()
    {

    }
}