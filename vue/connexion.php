<?php

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
    </head>
    <body class="container">
        <header class="row">
        <h1 id="title" class="col-sm-6 col-sm-offset-4">Connectez-vous : </h1>
        </header>
        <form action="connexion.php" method="POST">
            <input type="hidden" value="blabla" name="connect"/>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required /><br />
           
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" required /><br />
   
            <input type="submit" name="connexion" value="connexion">
        </form>
    </body>
</html>
