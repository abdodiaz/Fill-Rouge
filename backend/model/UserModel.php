<?php
require __DIR__ . "/../Config.php";

class UserModel{
    public $con;
    private  $reference;
    Private $cin;
    private  $nom;
    private  $prenom;
    private  $age;
    private  $email;
    private  $tel;

    public function setReference($reference){
        $this->reference = $reference;
    }
    public function setCin($cin){
        $this->cin = $cin;
     }

    public function setNom($nom){
        $this->nom = $nom;
     }

     public function setAge($age){
        $this->age = $age;
     }

     public function setPrenom($prenom){
        $this->prenom = $prenom;
     }

     public function setEmail($email){
        $this->email = $email;
     }

     public function setTel($tel){
        $this->tel = $tel;
     }
    
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll($refence)
    { 
        $selects="SELECT * FROM user where Reference = '$refence'";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Insert()
    {
    $insert='INSERT INTO `user`(`Referance`, `Cin`, `Nom`, `Prenom`, `Tele`, `Age`, `Email`) VALUES ("'.$this->reference.'","'.$this->cin.'","'.$this->nom.'","'.$this->prenom.'","'.$this->tel.'",'.$this->age.',"'.$this->email.'")';
    $this->con->connect($insert);    
    }
 
}