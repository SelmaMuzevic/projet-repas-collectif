<?php

/*
  PHP recuperation des donnees de formulaire et le traitement
 */

session_start();

include_once '../model/Database.php';
include_once '../model/Utilisateur.php';

function recupererForm() {
        $database = new Database();

    if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
        $pseudo = $_POST['pseudo'];
        $mdp = md5($_POST['mdp']);

        $utilisateur = new Utilisateur($pseudo, $mdp);
        var_dump($utilisateur);
        // Sauvgarder le pseudo et le mot de passe dans une session
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = $mdp;
        
        // on a utilisé une function de la classe Database
        $database->creerUtilisateur($utilisateur);
        
        echo "Félicitation, vous vous êtes inscrit(e) avec succès !";
    }
}
recupererForm();