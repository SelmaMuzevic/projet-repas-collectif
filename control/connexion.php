<?php

/* 
recuperer les donnes et les traiter
 */
function traiterConnect() {
    if(isset($_POST['pseudo']) && isset($_POST['mdp']) ) {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    var_dump($_POST);
    }

}
?>