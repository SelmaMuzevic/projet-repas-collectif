<?php

/* 
  PHP recuperation des donnees de formulaire et le traitement
 */


function recupererForm() {
    if(isset($_POST['pseudo']) && isset($_POST['mdp']) ) {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    var_dump($_POST);
    }

}

