<?php
require_once __DIR__ . "/../model/VendeurmsgModel.php";
class Vender
{
    function index()
    {
        $obj = new VendeurmsgModel();
        $value = $obj->GetAll();
        foreach ($value as $val) {
         http_response_code(201);
         echo json_encode(["id" => $val["Id"],"name" => $val["Name"],"Email" => $val["Email"], "Password" => $val["Password"],"Role"=>$val["Role"]]);
        }
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