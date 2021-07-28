<?php
require_once __DIR__ . "/../model/ContactModel.php";
class Contact
{
    function index()
    {
        $obj = new ContactModel();
        $value = $obj->GetAll();
        foreach ($value as $val) {
         http_response_code(201);
        echo json_encode(["id" => $val["Id"],"name" => $val["Name"],"Email" => $val["Email"], "Password" => $val["Password"],"Role"=>$val["Role"]]);
        }
    }
    function create()
    {
        $data = json_decode(file_get_contents("php://input"));
        $obj = new ContactModel();
    
        $obj->setNom($data->Nom);
        $obj->setPrenom($data->Prenom);
        $obj->setEmail($data->Email);
        $obj->setBesoin($data->Besoin);
        $obj->setMessage($data->Message);
        $obj->create();
    }
    function delete(){
        $data = json_decode(file_get_contents("php://input"));
        $obj = new ContactModel();
        $obj->setId($data->Id);
    }
}