<?php

/*
 Toutes les classes du dossier sont ici
/**
 * Description of Utilisateur
 *
 * @author selma
 */
class Utilisateur {
    private $nom;
    private $prenom;
    private $pseudo;
    private $adresse;
    private $email;
    private $mdp;
 
    function __construct($nom, $prenom, $pseudo, $adresse, $email, $mdp) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->mdp = $mdp;
    }
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getEmail() {
        return $this->email;
    }

    function getMdp() {
        return $this->mdp;
    }

}