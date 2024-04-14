<?php require 'actions/users/securityaction.php';?>
<?php require 'actions/questions/publish-questionaction.php';?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>
<form method="post">
        <?php
        if (isset($errorMSG)) {
            # code...
            echo '<p>'.$errorMSG.'</p>';
        }elseif (isset($successMSG)) {
            # code...
            echo '<p>'.$successMSG.'</p>';
        }
        ?>
        <table border="2">
            <tr>
                <td>Titre de la question</td>
                <td><input type="text" name="title" id=""></td>
            </tr>
            <tr>
                <td>Description de la question</td>
                <td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Contenu de la question</td>
                <td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr colspan="2">
                <!-- <p>Envoyer</p> -->
                <td><input type="submit"name="validate" value="Publier la question"></td>
            </tr>
        </table>
    </form>
</body>
</html>