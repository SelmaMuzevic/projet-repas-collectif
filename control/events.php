<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

include_once '../model/Evenement.php';
include_once '../model/Database.php';

$data = new Database();


if(!empty($_POST['nom']) && !empty($_POST['type']) && !empty($_POST['dateTime'])
        && !empty($_POST['lieu']) && !empty($_POST['adresse'])){
    
            $nom = $_POST['nom'];
            $type =$_POST['type'];
            $dateTime = $_POST['dateTime'];
            $lieu = $_POST['lieu'];
            $adresse = $_POST['adresse'];
    
     
     $evenement = new Evenement($nom, $type, $dateTime, $lieu, $adresse);
              var_dump($evenement);
     $data->stockerEvenement($evenement);
}





