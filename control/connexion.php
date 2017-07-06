<?php

/* 
recuperer les donnes et les traiter
 */

session_start();

include_once '../model/Utilisateur.php';
include_once '../model/Database.php';


function recupererForm() {
        $database = new Database();

    if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
        
        echo "<p>Connexion a echoué !</p><br/>";
    
    }elseif
         ($database->verifierUtilisateur($_POST['pseudo']) == false) {
        
        echo "<p>L'utilisateur n'existe pas !</p>";
   
    }else{
        $pseudo = $_POST['pseudo'];
        $mdp = md5($_POST['mdp']);
        
     if($database->recupererUtilisateur($pseudo, $mdp)){
              echo "<p>Bonjour ! Bienvenue dans votre espace membre !</p>";
     }  else{
         echo 'Erreur de connexion';
     }
        
 
    }
}
recupererForm();
echo '<a href="../vue/index.html">Retour a l\'accueil</a><br/>';