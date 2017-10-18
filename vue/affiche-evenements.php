<?php
include_once '../model/Evenement.php';

$dossier_evenement = scandir('../evenement');
foreach($dossier_evenement as $evenement){
    if(is_dir($evenement)){ continue; }
    
$evenement = unserialize (file_get_contents('../evenement/' .$evenement));
?>

<h3><?php echo $evenement->getNom(); ?></h3>
<p><?php echo $evenement->getType(); ?></p>
<p><?php echo $evenement->getDate(); ?></p>
<p><?php echo $evenement->getAdresse(); ?></p>

<form action="../control/events.php" method = "POST">
   
</form>
<?php } 

session_start();
include_once "../model/Database.php";
include_once "../model/Evenement.php";
$Database = new DataBase();
if (isset($_POST["event"])) {
    var_dump($_FILES);
    $filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $Event = new Events($filter["nameEvent"], $filter["nameType"], $filter["nameDescrition"], $filter['namelieu'], $filter['nameDateTime'], $filter['numberPersonne'], $filter['addPrice'], $filter["nameImage"]);
    $Database->creeEvents($Event);
    echo "Votre événement à réussis.";
    //IMAGE
    if(is_dir("files/")){
    mkdir("files/");
    }
    move_uploaded_file($_FILES["nameImage"]["tmp_name"], "files/" . $filter["nameEvent"] . ".png");
    //REFRESH
    header("refresh:05;url=../vue/index.php");
}else {
$Database->createPost($eventFilter);
echo "Votre post a échouer.";
}