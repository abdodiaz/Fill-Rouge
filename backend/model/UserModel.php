<?php
require __DIR__ . "/../Config.php";

class UserModel{

    private  $Email;
    private  $Password;
    function setEmail($Email){
        $this->Email=$Email;
    }
    function setPassword($Password){
        $this->Password=$Password;
    }
    function __construct()
    {
        $this->con=new Config();
    }
    
    function GetAll()
    { 
        $selects='SELECT * FROM `user` WHERE `Email`="'.$this->Email.'" and `Password`="'.$this->Password.'"';
        $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
}