<?php

    session_start();
    
/* 
 * Delete file
 */
if (isset($_POST["event"])) {
    $post = $_POST["event"];
    $valider = unlink("events/" . $post);
    if($valider) {
        echo "L'\événement a été supprimé" . "<br/";
        echo "Loading ...";
        echo header("refresh:03;url=../vue/index.html");
        header('Location: ../vue.index.html');
        session_unset();
        session_destroy();
    
        exit();
    }
}
?> 

