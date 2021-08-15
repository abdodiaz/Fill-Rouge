<?php
require __DIR__ . "/../Config.php";

class voituredashboardModel
{
    function __construct()
    {
        $this->con=new Config();
    }
    
    function insert($marque,$finiton,$model,$carburant,$transmission,$annee,$img_id)
    {
        $insert="INSERT INTO `voiture`( `Marque`, `Finition`, `Model`, `Carburant`, `Transmission`, `Annee`, `Img_id`) VALUES ('$marque','$finiton','$model','$carburant','$transmission','$annee',$img_id)";
         $this->con->connect($insert);
    }
    function getAll()
    {
        $select= "SELECT * FROM `voiture` ORDER BY Id DESC ";
        $result = $this->con->connect($select);
       return $result->fetchAll(PDO::FETCH_ASSOC); 

    }
    function delete($Id)
    {
        $delete ="DELETE FROM `voiture` WHERE `Id`=$Id";
        $this->con->connect($delete);
    }
    function update($marque,$finiton,$model,$carburant,$transmission,$annee,$img_id,$Id)
    {
        $Update="UPDATE `voiture` SET `Marque`='$marque',`Finition`='$finiton',`Model`='$model',`Carburant`='$carburant',`Transmission`='$transmission',`Annee`='$annee',`Img_id`='$img_id' WHERE `Id`=$Id";
        $this->con->connect($Update);
    }
    
}