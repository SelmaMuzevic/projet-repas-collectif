<?php

session_start();
include_once "../model/Database.php";
include_once "../model/Evenement.php";
$data = new Database();

if (isset($_POST["nom"])) {
    var_dump($_FILES);
    $filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $event = new Evenement($filter["nom"], $filter["type"], $filter["dateTime"], $filter['lieu'], $filter['adresse']);
    //$data->creerEvents($evenement);
    echo "Votre événement à réussi.";
    /*
    //IMAGE
    if(is_dir("files/")){
    mkdir("files/");
    }
    //move_uploaded_file($_FILES["nameImage"]["tmp_name"], "files/" . $filter["nameEvent"] . ".png");
    //REFRESH
     
     */
    //header("refresh:02;url=affiche-evenements.php");
}else {
//$data->creerEvents($evenement);
echo "Votre post a échouer.";
}

/*
 * include_once '../model/Evenement.php';
 */

//$dossier_evenement = scandir('../evenement');
//foreach($dossier_evenement as $evenement){
    //if(is_dir($evenement)){ continue; }
    
/*
 * $file= unserialize (file_get_contents('../evenement/' .$evenement));
 */
/*?>

<h3><?php echo $evenement->getNom(); ?></h3>
<p><?php echo $evenement->getType(); ?></p>
<p><?php echo $evenement->getDateTime(); ?></p>
<p><?php echo $evenement->getLieu(); ?></p>
<p><?php echo $evenement->getAdresse(); ?></p>

<form action="../control/events.php" method = "POST">
   
</form>
*/

