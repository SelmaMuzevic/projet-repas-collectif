<?php
  /**
 * Description of Database
 *
 * @author selma
 */
 // passer toutes les methodes en PDO 
 // toujours privilegier la base de donnees plutot que les fichiers 

include_once 'Utilisateur.php';
include_once 'Evenement.php';

class Database {

    private $dbh;
    private $utilisateur;
    private $evenement;
    
    public function __construct() {
        $this->dbh = new PDO('mysql:host=localhost;dbname=repas_collectif', 'selma', 'i love mysql !');
    }

    public function creerUtilisateur(Utilisateur $utilisateur) {
        $requete = $this->dbh->prepare('INSERT INTO utilisateur '
                 . '(nom, prenom, pseudo, adresse, email, mdp) ' 
                           . 'VALUES (:nom,:prenom,:pseudo,:adresse,:email,:mdp)');
            echo "truc :".$utilisateur->getNom() ;
        $requete->bindValue(':nom', $utilisateur->getNom(), PDO::PARAM_STR);
        $requete->bindValue(':prenom',  $utilisateur->getPrenom(), PDO::PARAM_STR);
        $requete->bindValue(':pseudo',  $utilisateur->getPseudo(), PDO::PARAM_STR);
        $requete->bindValue(':adresse',  $utilisateur->getAdresse(), PDO::PARAM_STR);
        $requete->bindValue(':email',  $utilisateur->getEmail(), PDO::PARAM_STR);
        $requete->bindValue(':mdp',  $utilisateur->getMdp(), PDO::PARAM_STR);


// on execute la requete 
        $requete->execute();

   function recupererUtilisateur($pseudo, $mdp) {
        
        // unserialize mot de passe et recuperer le pseudo 
        $utilisateur = unserialize(file_get_contents('../utilisateur/' . $pseudo . '.txt'));
        if ($utilisateur->getMdp() == $mdp) {
            

            $_SESSION['utilisateur'] = $utilisateur;
            return true;
        }
        return false;
    }
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
    // a mettre dans le control(traiter les donner)
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

    // Créer une méthode recupererEvenement sans argument qui fera un
    // scandir du dossier ../evenement puis qui fera une boucle (foreach)
    // sur le contenu de ce dossier et qui, pour chaque fichier,
    // fera un unserialize du file_get_contents du fichier pour
    // le mettre dans un tableau(array)
    // et pour rajouter un element faut faire array push


    

