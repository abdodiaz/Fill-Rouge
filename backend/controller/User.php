<?php
require_once __DIR__ . "/../model/UserModel.php";
class User
{

    function authentification()
    {
        $data = json_decode(file_get_contents("php://input"));
        $obj = new UserModel();
        $obj->setEmail($data->Email);
        $obj->setPassword(md5($data->Password));
        $value = $obj->GetAll();
       if (!empty($value)) {
            foreach ($value as $val) {
                http_response_code(201);
                echo json_encode(["id" => $val["Id"], "name" => $val["Name"], "Email" => $val["Email"], "Password" => $val["Password"], "Role" => $val["Role"]]);
            }
        }
        else{
            http_response_code(401);
            echo json_encode(["message" =>"eroooooooor"]);
        
    }

}}
