<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evenement
 *
 * @author selma
 */
class Evenement {
    
    private $nom;
    private $type;
    private $dateTime;
    private $lieu;
    private $adresse;
    
    
    public function __construct($nom, $type, $dateTime, $lieu, $adresse) {
        $this->nom = $nom;
        $this->type = $type;
        $this->dateTime = $dateTime;
        $this->lieu = $lieu;
        $this->adresse = $adresse;
        
    }
    
    function getNom() {
        return $this->nom;
    }

    function getType() {
        return $this->type;
    }

    function getDateTime() {
        return $this->dateTime;
    }

    function getLieu() {
        return $this->lieu;
    }
    
    function getAdresse() {
        return $this->adresse;

    }
}
