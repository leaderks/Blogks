<?php
session_start();
require('actions/database.php');

// validation du formulaire
if (isset($_POST['validate'])) {
    # code...
    // verifier si l user a bien rempli tout les champs
    if (!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND
     !empty($_POST['firstname']) AND !empty($_POST['password'])) {
        # code...
        $userpseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // verifier si l utilisateur existe deja dans la bd
        $checkIfUserExists = $bdd ->prepare('SELECT pseudo FROM user WHERE pseudo = ? ');
        $checkIfUserExists->execute(array($userpseudo));

        if ($checkIfUserExists->rowcount() == 0) {
            # code...
            // Inserer l utilisateur dans la bd
            $iserUserOnwebsite = $bdd->prepare('INSERT INTO user(pseudo,nom,prenom,mdp)VALUES(?,?,?,?)');
            $iserUserOnwebsite->execute(array($userpseudo,$user_lastname,$user_firstname,$user_password));
            
            // recuperation des informations de l utilisateur
            $getinfosOfThisuserReq = $bdd->prepare('SELECT id,pseudo,nom,prenom from user where pseudo =? AND nom = ? AND prenom=? ');
            $getinfosOfThisuserReq->execute(array($userpseudo,$user_lastname,$user_firstname));

            // authentifier l utilisateur sur le site
            $userinfo = $getinfosOfThisuserReq->fetch();
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['lastname'] = $userinfo['nom'];
            $_SESSION['firstname'] = $userinfo['prenom'];
          

            // redirige vers la page d accueil
            header('Location: index.php');
        } else {
            # code...
            $errorMSG = "l'utilisateur existe deja sur le site ";
        }
        
    } else {
        # code...
        $errorMSG = "veillez completer tout les champs";
    }
    
} else {
    # code...
}

?>