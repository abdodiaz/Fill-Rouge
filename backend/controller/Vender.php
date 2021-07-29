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
        $data = json_decode(file_get_contents("php://input"));
        $obj = new VendeurmsgModel();
        $obj->setNom($data->Nom);
        $obj->setPrenom($data->Prenom);
        $obj->setEmail($data->Email);
        $obj->setTel($data->Tel);
        $obj->setVille($data->Ville);
        $obj->setMarque($data->Marque);
        $obj->setModel($data->Model);
        $obj->create();
    }
}