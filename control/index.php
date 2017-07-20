<?php


include_once '../model/Utilisateur.php';
include_once '../model/Database.php';

$database = new Database();

$personne = $database->recupererUtilisateur("selma");
var_dump($personne);
echo "<p>Bonjour " .$personne->getPseudo()."</p>";

