<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../model/Utilisateur.php';
include_once '../model/Database.php';

$database = new Database();

$personne = $database->recupererUtilisateur("selma");
var_dump($personne);
echo "<p>Bonjour " .$personne->getPseudo()."</p>";

