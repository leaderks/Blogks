<?php
require('actions/database.php');

if (isset($_POST['validate'])) {
    # code...
    if (!empty($_POST['answer'])) {
        # code...
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertanswer = $bdd->prepare('INSERT INTO answer(id_auteur,pseudo_auteur,id_question,contenu) VALUES(?,?,?,?)');
        $insertanswer->execute(array($_SESSION['id'],$_SESSION['pseudo'],$_GET['id'],$user_answer));
    }
}
?>