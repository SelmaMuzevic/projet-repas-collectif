<?php
include_once '../model/Evenement.php';

$dossier_evenement = scandir('../evenement');
foreach($dossier_evenement as $evenement){
    if(is_dir($evenement)){ continue; }
    
    $evenement = unserialize (file_get_contents('../evenement/' .$evenement));
?>
<h3><?php echo $evenement->getNom(); ?></h3>
<p><?php echo $evenement->getType(); ?></p>
<p><?php echo $evenement->getDateTime(); ?></p>
<p><?php echo $evenement->getLieu(); ?></p>
<p><?php echo $evenement->getAdresse(); ?></p>

<form action="../control/events.php" method = "POST">
   
</form>
<?php } 

