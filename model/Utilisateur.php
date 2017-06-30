<?php

/*
 Toutes les classes du dossier sont ici
/**
 * Description of Utilisateur
 *
 * @author selma
 */
class Utilisateur {
    private $pseudo;
    private $mdp;
    
  public function __construct($pseudo, $mdp) {
      
      $this->pseudo = $pseudo;
      $this->mdp = $mdp;
  }
  
  function getPseudo() {
      return $this->pseudo;
  }

  function getMdp() {
      return $this->mdp;
  }


}
