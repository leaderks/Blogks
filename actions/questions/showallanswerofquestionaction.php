<?php
require('actions/database.php');

        $getallanswerofquestion = $bdd->prepare('SELECT id_auteur,pseudo_auteur,id_question,contenu FROM answer WHERE id_question=? ORDER BY id DESC');
        $getallanswerofquestion->execute(array($_GET['id']));

?>