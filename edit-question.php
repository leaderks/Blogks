<?php 
   require('actions/users/securityaction.php');
   require('actions/questions/getinfoofeditquestion.php');
   require('actions/questions/editquestionaction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>

<div>
     <?php
        if (isset($errorMSG)) {
            # code...
            echo '<p>'.$errorMSG.'</p>';
        }
        ?>
    <?php
    if (isset($question_content)) {
        # code...
        ?>
<form method="POST">
       
        <table border="2">
            <tr>
                <td>Titre de la question</td>
                <td><input type="text" name="title" id="" value="<?=$question_title;?>"></td>
            </tr>
            <tr>
                <td>Description de la question</td>
                <td><textarea name="description" id="" cols="30" rows="10" ><?=$question_description;?></textarea></td>
            </tr>
            <tr>
                <td>Contenu de la question</td>
                <td><textarea name="content" id="" cols="30" rows="10"  ><?=$question_content;?></textarea></td>
            </tr>
            <tr colspan="2">
                <!-- <p>Envoyer</p> -->
                <td><input type="submit" name="validate" value="Modifier la question"></td>
            </tr>
        </table>
    </form>
    <?php
}
?>
</div>

</body>
</html>