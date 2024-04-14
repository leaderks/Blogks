<?php
require('actions/database.php');

// validation du formulaire
if (isset($_POST['validate'])) {
    # code...
    // verifier si les champs sont remplis
    if (!empty($_POST['description']) AND !empty($_POST['content']) AND
    !empty($_POST['title'])) {
        # code...

        // les donnees a faire passer dans la requete
        $newquestion_title = htmlspecialchars($_POST['title']);
        $newquestion_description =nl2br(htmlspecialchars($_POST['description'])) ;
        $newquestion_content = nl2br(htmlspecialchars($_POST['content']));
// Modifier les informations de la requete qui possed l id rentree en parametre
        $editquestiononwebsite = $bdd->prepare('UPDATE questions SET titre=?, description=?,contenu=? WHERE id=?');
        $editquestiononwebsite->execute(array($newquestion_title,$newquestion_description,$newquestion_content,$idofquestion));
        header('Location: my-question.php');
    }else {
        # code...
        $errorMSG = "veillez remplir tout les champs";
    }
}
?>