<?php
session_start();
require('actions/database.php');

// validation du formulaire
if (isset($_POST['validate'])) {
    # code...
    // verifier si l user a bien rempli tout les champs
    if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {
        # code...
        $userpseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // on verifie si l utilisateur existe
        $checkuserexist = $bdd->prepare('SELECT* FROM user WHERE pseudo =?');
        $checkuserexist->execute(array($userpseudo));

        // on recupere les donnees de l utilisateur
        if ($checkuserexist->rowCount() > 0) {
            # code...

            $usersinfo = $checkuserexist->fetch();
            if (password_verify($user_password,$usersinfo['mdp'])) {
                # code...
                 // authentifier l utilisateur sur le site
                //  $getinfosOfThisuserReq = $bdd->prepare('SELECT * from user where pseudo =? ');
                //  $getinfosOfThisuserReq->execute(array($userpseudo));
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersinfo['id'];
            $_SESSION['pseudo'] = $usersinfo['pseudo'];
            $_SESSION['lastname'] = $usersinfo['nom'];
            $_SESSION['firstname'] = $usersinfo['prenom'];

            // redirige vers la page d accueil
            header('Location: index.php');
            }else {
                # code...
                $errorMSG = "votre mot de pass est incorrect.";
            }
        } else {
            # code...
            $errorMSG = "votre pseudo est incorrect.";
        }
        // redirige vers la page d accueil
        // header('Location: index.php');

    } else {
        # code...
        $errorMSG = "veillez completer tout les champs";
    }
}
?>