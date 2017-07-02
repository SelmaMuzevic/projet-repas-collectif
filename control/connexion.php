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
        $mdp = $_POST['mdp'];
        
        $utilisateur = new Utilisateur($pseudo, $mdp);
        // Sauvgarder le pseudo et le mot de passe dans une session
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = md5($mdp);
       
        echo "<p>Bienvenue dans votre espace membre !</p>";
    }
}
recupererForm();