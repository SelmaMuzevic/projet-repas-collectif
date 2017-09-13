<?php
// La partie de la page, traitement des donnees
session_start();

include_once '../model/Utilisateur.php';
include_once '../model/Database.php';

if(!empty($_POST['connect']) && $_POST['connect'] == 'blabla'){
    $connexion = new Database();
$connexion->recupererForm($_POST['pseudo'], $_POST['mdp']);

}

?><!DOCTYPE html>
<!--
Page connexion
-->
<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
            
            .container{
                margin-top: 100px;
                background-color: lightsalmon;
            }
            .connect{
                border-radius: 40px;
                height: 40%;
                width: 40%;  
                padding: 50px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: auto;
                background-color: lightgrey;
            }
            
        </style>
    
    </head>
    <body class="container">
        <div class="connect">
        <header class="row">
        <h1 id="title" class="col-sm-6 col-sm-offset-4">Connectez-vous : </h1>
        </header>
        <form action="connexion.php" method="POST">
            
            <div class="form-group">
            <input type="hidden" value="blabla" name="connect"/>
            <label for="pseudo">Pseudo :</label>
            <input class="form-control" type="text" name="pseudo" id="pseudo" required /><br />
            </div>
            
            <div class="form-group">
            <label for="mdp">Mot de passe :</label>
            <input class="form-control" type="password" name="mdp" id="mdp" required /><br />
            </div>
   
            <input type="submit" name="connexion" value="connexion">
        </form>
        </div>
    </body>
</html>
