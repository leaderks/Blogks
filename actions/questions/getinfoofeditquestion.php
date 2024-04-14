<?php

require('actions/database.php');

// Verifier si l id de la ques est bien passer en parametre
if (isset($_GET['id']) AND !empty($_GET['id'])) {
    # code...
    $idofquestion = $_GET['id'];

    // verifier si la question existe
    $checkIfquestionexists = $bdd->prepare('SELECT * FROM questions WHERE id =?');
    $checkIfquestionexists->execute(array($idofquestion));


    if ($checkIfquestionexists->rowcount() >0) {
        # code...
        // recuperer les donnees de la question
        $questioninfo = $checkIfquestionexists->fetch();
        if ($questioninfo['id_auteur'] == $_SESSION['id'] ) {
            # code...
            $question_title = $questioninfo['titre'];
            $question_description = $questioninfo['description'];
            $question_content = $questioninfo['contenu'];
            // $question_date = $questioninfo['date_publication'];


            $question_description = str_replace('<br />', '', $question_description );
            $question_content = str_replace('<br />', '', $question_content );

        }else {
            # code...
            $errorMSG="vous n etes pas l'auteur de cette question";
        }
    }else {
        # code...
        $errorMSG = "Aucune question n'a ete Trouvee";
    }

}else {
    # code...
    $errorMSG = "Aucune question n'a ete trouvee!";
}
?>