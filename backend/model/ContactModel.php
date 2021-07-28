<?php
require __DIR__ . "/../Config.php";

class ContactModel
{   
    private  $Id;
    private  $Nom;
    private  $Prenom;
    private  $Email;
    private  $Besoin;
    private  $Message;
    
    public function setId($Id){
        $this->Id=$Id;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }
    public function SetEmail($Email)
    {
        $this->Email = $Email;
    }
    public function setBesoin($Besoin)
    {
        $this->Besoin = $Besoin;
    }
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }


    function __construct()
    {
        $this->con = new Config();
    }
    function GetAll()
    {
        $selects = "SELECT * FROM contact";
        $z = $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC);
    }
    function create()
    {
        $insert = 'INSERT INTO `contact`( `Nom`, `Prenom`, `Email`, `Besoin`, `Meessage`) VALUES("' . $this->Nom . '","' . $this->Prenom . '","' . $this->Email . '","' . $this->Besoin . '","' . $this->Message . '")';
        $this->con->connect($insert);
    }
    function delete()
    {
        $delete='DELETE FROM `contact` WHERE `Id`='. $this->id .' ';
        $this->con->connect($delete);
    }
}
