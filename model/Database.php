<?php

/*


  /**
 * Description of Database
 *
 * @author selma
 */

class Database {

    public function creerUtilisateur(Utilisateur $utilisateur) {

        // On verifie si le dossier utilisateur existe dêjà 
        if (!is_dir("../utilisateur/")) {
        //sinon on le crée
            mkdir("../utilisateur/");
        }
            
        //On crée un nouveau fichier pour l'utilisateur
            $new_file = fopen("../utilisateur/" . $utilisateur->getPseudo() . ".txt", "w");

        // On le serialize
            fwrite($new_file, serialize($utilisateur));
            //on ferme le fichier
            fclose($new_file);
        
    }
    
    public function recupererUtilisateur($pseudo) {
        // unserialize mot de passe et recuperer le pseudo 
         $utilisateur = unserialize(file_get_contents('../utilisateur/'.$pseudo. '.txt'));   
         return $utilisateur;
         }
         
         // on a fait une function qui verifie l'existance d'un fichier 
    public function verifierUtilisateur($pseudo) {
        if(file_exists('../utilisateur/' .$pseudo. '.txt')){
          
            return true;
        }else{
            return false;
        }
       }
    public function creerEvenement(Evenement $evenement){
          
          if (!is_dir("../evenement/")) {
                mkdir("../evenement/");
        }
        $event = fopen("../evenement/" . $evenement->getNom() . ".txt", "w");
        fwrite($evenement, serialize($event));
            //on ferme le fichier
            fclose($event);
      } 
    
}
      



