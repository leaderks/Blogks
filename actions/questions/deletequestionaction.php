<?php
session_start();
if (!isset($_SESSION['auth'])) {
    # code...
    header('Location: ../../loging.php');
}
require("../database.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    # code...
    $idofthequestion = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idofthequestion));

    if ($checkIfQuestionExists->rowcount()>0) {
        # code...
        $questioninfo = $checkIfQuestionExists->fetch();
        if ($questioninfo['id_auteur'] == $_SESSION['id']) {
            # code...
            $deletethisquestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deletethisquestion->execute(array($idofthequestion));

            header('Location: ../../my-question.php');
        }else {
            # code...
            echo"vous n avez pas le droit de supprimmer une question qui ne vous appartient pas!";
        }
    }else {
        # code...
        echo"Aucune question n q ete trouve";
    } 
}else {
    # code...
    echo "Aucune question n'a ete trouve";
}
?>