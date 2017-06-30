<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author selma
 */
class Database {
    function createUtilisateur(Utilisateur $utilisateur){
        if(isset($_POST['pseudo']) 
	    && isset($_POST['mdp'])){


	    //On récupère les variables
	    $pseudo = $_POST['pseudo'];
	    $mdp = $_POST['mdp'];
	    
	    //On encrypte en md5 ou en sha1 (sha256 c'est mieux)
	    $fichier = md5($mdp);

	    //On vérifie que le dossier utilisateur existe
	    if(!is_dir("utilisateur")) {

	        //sinon on le crée
	        mkdir("utilisateur");
	    }
	    //On crée un nouveau fichier pour l'utilisateur
	    $new_file = fopen("utilisateur/".$pseudo.".txt", "w");


	    //On met son mdp encrypté dedans
	    fwrite($new_file, serialize($new_file));


	    //on ferme le fichier
	    fclose($new_file);
	   
	}
	
    }

}