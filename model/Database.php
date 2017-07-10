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

    public function recupererUtilisateur($pseudo, $mdp) {
        
        // unserialize mot de passe et recuperer le pseudo 
        $utilisateur = unserialize(file_get_contents('../utilisateur/' . $pseudo . '.txt'));
        if ($utilisateur->getMdp() == $mdp) {
            

            $_SESSION['utilisateur'] = $utilisateur;
            return true;
        }
        return false;
    }

    // on a fait une function qui verifie l'existance d'un fichier 
    public function verifierUtilisateur($pseudo) {
        if (file_exists('../utilisateur/' . $pseudo . '.txt')) {

            return true;
        } else {
            return false;
        }
    }

    public function creerEvenement(Evenement $evenement) {
        
        if (!is_dir("../evenement/")) {
            mkdir("../evenement/");
        }
        $file = fopen("../evenement/" . time() . ".txt", "w");
        fwrite($file, serialize($evenement));
        //on ferme le fichier
        fclose($file);
    }
    public function RecupererEvenement(){
        $evenement = unserialize(file_get_contents('../evenement/' . time() . '.txt'));
	
    }
    
    function recupererForm($pseudo, $mdp) {

        if (empty($pseudo) || empty($mdp)) {

            echo "<p>Connexion a echoué !</p><br/>";

        }elseif
             ($this->verifierUtilisateur($pseudo) == false) {

            echo "<p>L'utilisateur n'existe pas !</p>";

        }else{
            
            $mdp = md5($mdp);

            if($this->recupererUtilisateur($pseudo, $mdp)){
                header('Location: ../vue/profil.php');
                exit();
            }else{
                echo 'Erreur de connexion';
            }
        }
    }
}



    

    //Créer une méthode recupererEvenement sans argument qui fera un
    //scandir du dossier ../evenement puis qui fera une boucle (foreach)
    //sur le contenu de ce dossier et qui, pour chaque fichier,
    //fera un unserialize du file_get_contents du fichier pour
    //le mettre dans un tableau(array)
    // et pour rajouter un element faut faire array push

