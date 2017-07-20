<?php
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

function displayEvent() {
        return '<div>' . $this->nom . '</div>'. '<div>' . $this->type . '</div>'. '<div>' . $this->dateTime . '</div>'
                . '<div>' . $this->lieu . '</div>'. '<div>' . $this->adresse . '</div>' . '<div>' ;
                
    }
}

