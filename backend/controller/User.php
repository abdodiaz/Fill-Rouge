<?php
require_once __DIR__ . "/../model/UserModel.php";
class User
{
    function index()
    {
        $ref = new UserModel();
        $value = $ref->GetAll();
        foreach ($value as $val) {
            if ($val) {
                // Ici la création a fonctionné
                // On envoie un code 201
                http_response_code(201);
                echo json_encode(["id" => $val["Id"],"name" => $val["Name"],"name" => $val["Name"], "name" => $val["Name"]]);
            } else {
                // Ici la création n'a pas fonctionné
                // On envoie un code 503
                http_response_code(503);
                echo json_encode(["message" => "ref n'a pas été effectué "]);
            }
        }
    }
    function create()
    {
        $data = json_decode(file_get_contents("php://input"));
        //   $obj = new UserModel();
        // //generate
        // $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        // $result = '';
        // for ($i = 0; $i < 5; $i++)
        // $result .= $characters[mt_rand(0, 61)];
        // $obj->setCin($data->cin);
        // $obj->setReference($obj->setCin($data->cin).$result);
        // $obj->setNom($data->nom);
        // $obj->setPrenom($data->prenom);
        // $obj->setEmail($data->email);
        // $obj->setTel($data->tel);
        // $obj->setAge($data->age);
        // $obj->Insert();
    }
}
