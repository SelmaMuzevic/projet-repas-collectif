<?php
  /**
 * Description of Database
 *
 * @author selma
 */



class Database {

    private $dbh;
    
    public function __construct($dbh) {
        $this->dbh = new PDO('mysql:host=localhost;dbname=repas_collectif', 'selma', 'ppp');
    }

    public function creerUtilisateur(Utilisateur $utilisateur) {
        $this->dbh->prepare('INSERT INTO repas_collectif '
                 . '(nom, prenom, pseudo, adresse, email, mdp) ' 
                           . 'VALUES (:nom,:prenom,:pseudo,:adresse,:email,:mdp)');

$this->dbh->bindValue('nom', $prenom, PDO::PARAM_STR);
$this->dbh->bindValue('prenom', $prenom, PDO::PARAM_STR);
$this->dbh->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
$this->dbh->bindValue('adresse', $adresse, PDO::PARAM_STR);
$this->dbh->bindValue('email', $email, PDO::PARAM_STR);
$this->dbh->bindValue('mdp', $mdp, PDO::PARAM_STR);


// on execute la requete 
$this->dbh->execute();

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

