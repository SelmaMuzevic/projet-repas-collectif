<?php

/*
  PHP recuperation des donnees de formulaire et le traitement
 */

session_start();

include_once '../model/Database.php';
include_once '../model/Utilisateur.php';

function recupererForm() {
        $database = new Database();

   if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        // pour proteger le code pour eviter les injection de code de l'exterieur
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
   $user = new Utilisateur($post['nom'], $post['prenom'], 
           $post['pseudo'], $post['adresse'], $post['email'], $post['mdp']);
        echo "Félicitation, vous vous êtes inscrit(e) avec succès !";
    }
    
}
recupererForm();
echo '<a href="../vue/index.html">Retour a l\'accueil</a><br/>';

?><!DOCTYPE html>
<!--
Page inscription
-->
<html>
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="inscription.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
          .top{
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid grey;
    border-radius: 50px;
    background-color: #ff9933;

}  
        </style>
    </head>
    <body class="container">
            <div class="top">
            <header class="row">
            <h1 id="title" class="col-sm-6 col-sm-offset-4">Veuillez vous inscrire : </h1>
            </header>
        
        <form action="inscription.php" method="POST">
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="nom">Votre nom :</label>
            <input class="form-control" id="nom" name="nom" type="text" required/><br />
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3"> 
            <label for="prenom">Votre prenom :</label>
            <input class="form-control" id="prenom" name="prenom" type="text" required/><br />
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="pseudo">Pseudo :</label>
            <input class="form-control" id="pseudo" name="pseudo" type="text" required/><br />
            </div> 
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="adresse">Votre adresse :</label>
            <input class="form-control" id="adresse" name="adresse" type="text" required/><br />
            </div> 
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="email">Votre adresse e-mail :</label>
            <input class="form-control" id="email" name="email" type="text" required/><br />
            </div> 
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3"> 
            <label for="mdp">Mot de passe :</label>
            <input class="form-control" id="mdp" name="mdp" type="password" required/><br />
            </div> 
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">  
            <label for="pass-confirm">Confirmation mot de passe :</label>
            <input class="form-control" id="pass-confirm" name="pass-confirm" type="password" required/><br />
            </div>  
   
            <input type="submit" name="inscription" value="inscription">
           
        </form>
    </div>
    </body>
</html>


