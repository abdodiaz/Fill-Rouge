<?php
require_once __DIR__ . "/../model/VendeurmsgModel.php";
class Vender
{
    function index()
    {
        require_once __DIR__ ."/../View/vendre.php";
    }
    function create()
    {
        if(isset($_POST["sub"])){
        $obj = new VendeurmsgModel();
        $obj->setNom($_POST["Nom"]);
        $obj->setPrenom($_POST["Prenom"]);
        $obj->setEmail($_POST["Email"]);
        $obj->setTel($_POST["Tele"]);
        $obj->setVille($_POST["Ville"]);
        $obj->setMarque($_POST["Marque"]);
        $obj->setModel($_POST["Modele"]);
        $obj->create();
        }
        
    }
}