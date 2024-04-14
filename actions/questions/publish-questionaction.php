<?php
// session_start();
require ('actions/database.php');



// validation du formulaire
if (isset($_POST['validate'])) {
    # code...
    // verifier si l user a bien rempli tout les champs
    if (!empty($_POST['description']) AND !empty($_POST['content']) AND
     !empty($_POST['title']) ) {
        # code...
        // verifier si les champs ne sont pas vides
        $question_title = htmlspecialchars($_POST['title']);
        $question_description =nl2br(htmlspecialchars($_POST['description'])) ;
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo = $_SESSION['pseudo'];
        

        // on insert les question dans la base de donnee la bd
        $insertquestionwebsite = $bdd ->prepare('INSERT INTO questions(titre,description,contenu,id_auteur,pseudo_auteur,date_publication) VALUES(?,?,?,?,?,?)');
        $insertquestionwebsite->execute(
            array(
                $question_title,
                $question_description,
                $question_content,
                $question_id_author,
                $question_pseudo,
                $question_date
            )
        );

               $successMSG = "Votre question a bien ete publier sur le site";
        
    } else {
        # code...
        $successMSG = "veillez completer tout les champs";
    }
    
} else {
    # code...
}
?>