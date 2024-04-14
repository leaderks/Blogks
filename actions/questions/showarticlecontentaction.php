<?php
require('actions/database.php');
// Verifier si l id de la question est entrer dans l url
if (isset($_GET['id']) AND !empty($_GET['id'])) {
    # code...
    $idofquestion = $_GET['id'];
    $checkIfquestionexist = $bdd->prepare('SELECT* FROM questions WHERE id = ?');
    $checkIfquestionexist->execute(array($idofquestion));

    if ($checkIfquestionexist->rowcount()>0) {
        # code...
// Recuperer tout les datas de la question
        $questioninfos = $checkIfquestionexist->fetch();
// stocker tout les datas de la question dans les variables propres
        $question_title = $questioninfos['titre'];
        $question_contenu = $questioninfos['contenu'];
        $question_id_auteur = $questioninfos['id_auteur'];
        $question_pseudo_auteur = $questioninfos['pseudo_auteur'];
        $question_publication_date = $questioninfos['date_publication'];
    }else {
        # code...
        $errormsg = "Aucune question n a ete trouvee";
    }

}else {
    # code...
    $errormsg = "Aucune question n'a ete trouvee";
}
?>