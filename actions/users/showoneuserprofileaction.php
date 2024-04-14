<?php
require('actions/database.php');

// Recuperer l identifiant de l utilisateur
if (isset($_GET['id']) AND !empty($_GET['id'])) {
    # code...
    $idofuser = $_GET['id'];
    $checkifuserexists = $bdd->prepare('SELECT pseudo,nom,prenom FROM user WHERE id = ?');
    $checkifuserexists->execute(array($idofuser));

    if ($checkifuserexists->rowcount()>0) {
        # code...
        // Recuperer tout les donnees de l utilisateur
        $userinfo = $checkifuserexists->fetch();
        
        $user_pseudo = $userinfo['pseudo'];
        $user_lastname = $userinfo['nom'];
        $user_firstname = $userinfo['prenom'];

        // Recuperer tout les questions de l utilisateur
        $gethisquestion = $bdd->prepare('SELECT* FROM questions WHERE id_auteur = ? ORDER BY id DESC');
        $gethisquestion->execute(array($idofuser));
    }else {
        # code...
        $errormsg = "Aucun utilisateur trouve";
    }
}else {
    # code...
    $errormsg = "Aucun utilisateur trouve";
}
?>