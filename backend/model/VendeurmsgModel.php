<?php
require __DIR__ . "/../Config.php";

class VendeurmsgModel{
    private  $Nom;
    private  $Prenom;
    private  $Email;
    private  $Tel;
    private  $Ville;
    private  $Marque;
    private  $Model;
    public function setNom($Nom){
        $this->Nom = $Nom;
     }
     public function setPrenom($Prenom){
        $this->Prenom = $Prenom;
     }
     public function SetEmail($Email){
        $this->Email = $Email;
     }
     public function setTel($Tel){
        $this->Tel = $Tel;
     }
     public function setVille($Ville){
        $this->Ville = $Ville;
     }
     public function setMarque($Marque){
        $this->Marque = $Marque;
     }
     public function setModel($Model){
        $this->Model = $Model;
     }
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM vendeur_msg";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    function create(){
        $insert = 'INSERT INTO `vendeur_msg`( `Nom`, `Prenom`, `Telephone`, `Email`, `Ville`, `Marque`, `Model`) VALUES("'.$this->Nom.'","'.$this->Prenom.'","'.$this->Tel.'","'.$this->Email.'","'.$this->Ville.'","'.$this->Marque.'","'.$this->Model.'")';
        $this->con->connect($insert);
    }
}