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
    private $date;
    private $adresse;
    
    
    public function __construct($nom, $type, $date, $adresse) {
        $this->nom = $nom;
        $this->type = $type;
        $this->date = $date;
        $this->adresse = $adresse;
        
    }

    function html() {
        if (session_status() != 2) {
            session_start();
        }

        echo '<article class="evenement">';
        echo '<h2>' . $this->title .'</h2>';
        echo '<p>Evenement type : ' . $this->type .'</p>';
        echo '<p>Evenement date: ' . $this->date .'</p>';
        echo '<p>Evenement adresse: ' . $this->adresse .'</p>';
        
        
        if (isset($_SESSION['utilisateur'])) {
            echo '<form action="" method="post">';
            if (in_array($_SESSION['utilisateur'], $this->utilisateurs) || $_SESSION['utilisateurs'] == $this->utilisateurs) {
                echo '<p> adresse: ' . $this->adresse . '</p>';
            } else {
                echo '<input type="hidden" name="sub" value="' . $this->title . '"/>';
                echo '<input type="submit" value="Inscription"/>';
            }
            echo '</form>';
        }
        echo '</article>';
    }
    
    function addUtilisateur($utilisateur) {
        if (in_array($utilisateur, $this->utilisateurs) == false) {
            if (isset($this->utilisateurs) || count($this->utilisateurs) == 0) {
                array_push($this->utilisateurs, $utilisateur);            
            } else {
                $this->utilisateurs = [$utilisateur];
            }
        }
    }
    
    function getTitle() {
        return $this->title;
    }
    function getDate() {
        return $this->date;
    }
}
