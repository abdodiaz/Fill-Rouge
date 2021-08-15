<?php
require __DIR__ . "/../Config.php";

class vendeurdashModel
{
    function __construct()
    {
        $this->con=new Config();
    }
    
    function insert($nom,$prenom,$email,$phone,$ville)
    {
        $insert="INSERT INTO `vendeur`(`Nom`, `Prenom`, `Email`, `Phone`, `Ville`) VALUES ('$nom','$prenom','$email','$phone','$ville')";
         $this->con->connect($insert);
    }
    function getAll()
    {
        $select= "SELECT * FROM `vendeur` ORDER BY Id DESC ";
        $result = $this->con->connect($select);
       return $result->fetchAll(PDO::FETCH_ASSOC); 

    }
    function delete($Id)
    {
        $delete ="DELETE FROM `vendeur` WHERE `Id`=$Id";
        $this->con->connect($delete);
    }
    function update($Nom,$Prenom,$Email,$Tele,$Ville,$Id)
    {
        $Update="UPDATE `vendeur` SET `Nom`='$Nom',`Prenom`='$Prenom',`Email`='$Email',`Phone`='$Tele',`Ville`='$Ville' WHERE `Id`=$Id";
        $this->con->connect($Update);
    }
    
}