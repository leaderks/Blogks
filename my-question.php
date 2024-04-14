<?php
require('actions/users/securityaction.php');
require('actions/questions/myquestionaction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>

<?php

while ($question = $getAllMyQuestions->fetch()) {
    # code...
    ?>
    <br><br>
    <table border="2">
            <tr>
                <td colspan="4" align="center"><?=$question['titre']?></td>
            </tr>
            <tr>
                <td colspan="2">Description de la question</td>
                <td colspan="2"><?=$question['description']?></</td>
            </tr>
           
            <tr >
                <!-- <p>Envoyer</p> -->
                <td colspan="2" ><button color="gren"><a href="article.php?id=<?=$question['id'];?>">Acceder a la question</a></button></td>
                <td ><button color="red"><a href="edit-question.php?id=<?=$question['id']?>">Modifier l'article</a></button></td>
                <td ><button color="red"><a href="actions/questions/deletequestionaction.php?id=<?=$question['id']?>">Supprimer l'article</a></button></td>
            </tr>
            
        </table>
    <?php
}

?>

</body>
</html>