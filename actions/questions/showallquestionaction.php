<?php
require('actions/database.php');
// recuperer les questions par defaut sans la recherche
$getallquestion = $bdd->query('SELECT id,titre,description,id_auteur,pseudo_auteur,date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

// verifier si une recherche a ete rentree par l utilisateur
if (isset($_GET['search']) AND !empty($_GET['search'])) {
        # code...
    // la recherche
    $usersearch = $_GET['search'];

    // $getallquestion = $bdd->prepare('SELECT id,id_auteur,titre,description,pseudo,date_publication FROM questions WHERE titre =? ');
    // $getallquestion->execute($usersearch);

    // recuperer toutes questions qui correspondent a la recherche en fonction du titre
    $getallquestion = $bdd->query('SELECT id,titre,description,id_auteur,pseudo_auteur,date_publication FROM questions WHERE titre LIKE "%'.$usersearch.'%" ORDER BY id DESC');
}

?>