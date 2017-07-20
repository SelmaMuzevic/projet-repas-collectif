<?php

include_once "Utilisateur.php";
include_once 'Evenement.php';

//$event = new Evenement();

class Database {
    
    //Créer un utilisateur 
    function creeUtilisateur(Utilisateur $utilisateur) {
        
        //Crée un dossier si il n'existe pas.
        if (!is_dir("../control/utilisateur")) {
            mkdir("../control/utilisateur");
        }
        //user->getPseudo() va chercher le pseudo que l'on a conserver.
        $new_file = fopen("../control/utilisateur/" . $utilisateur->getPseudo() . ".txt", "w");
        //Serialize transforme les données sous donné binaire pour en faire ce que l'on veut.
        fwrite($new_file, serialize($utilisateur));
        //Je referme mon fichier.
        fclose($new_file);
        return true;
    }

    //Lecture de l'utilisateur unserialize. 
    function lireUtilisateur($utilisateur) {
        if (is_file('utilisateur/' . $utilisateur . '.txt')) {
            return unserialize(file_get_contents('utilisateur/' . $utilisateur . '.txt'));
        }
        return false;
    }

    //crée des evenements  
    function creerEvents(Events $evenement) {
        //echo dateTime();
        if (!is_dir("../control/events")) {
            mkdir("../control/events");
        }
        //user->getPseudo() va chercher le pseudo que l'on a conserver.
        $new_event = fopen("../control/events/" . $evenement->getName() . ".txt", "w");
        fwrite($new_event, serialize($evenement));
        fclose($new_event);
        return true;
    }
    
    //prend simplement les fichier et les place dans un tableau.
    function lireEvents() {
        //tab
        $evenement = [];
        $scan = scandir("../control/events/");
        foreach($scan as $file) {
            if(!is_dir("../control/events/" . $file)) {
                $evenements = unserialize(file_get_contents("../control/events/" . $file));
                //Placer dans un a tab.
                $evenements[] = $evenement;
            }
        }
        return $evenement;
    }
}





  /**
 * Description of Database
 *
 * @author selma
 */



/*class Database {

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
    //Faire la méthode recupererEvenements
    public function RecupererEvenement(){
        //Créer un tableau vide
        $evenement = [];
        //Faire le scandir
        $file = scandir('../evenement');
        //faire la boucle sur chaque fichier
        foreach($file as $evenement){
            echo $evenement;
        }
        //Pour chaque fichier on unserialize et on ajoute le résultat
        //au tableau créé au début
        $evenement = unserialize(file_get_contents('../evenement/' . time() . '.txt'));
	
        
        //tout à la fin de la méthode, on fait un return du tableau
        return $file;
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
*/
    //Créer une méthode recupererEvenement sans argument qui fera un
    //scandir du dossier ../evenement puis qui fera une boucle (foreach)
    //sur le contenu de ce dossier et qui, pour chaque fichier,
    //fera un unserialize du file_get_contents du fichier pour
    //le mettre dans un tableau(array)
    // et pour rajouter un element faut faire array push

