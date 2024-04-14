<?php
session_start();
require('actions/users/showoneuserprofileaction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>
<br><br><br>
    <?php
    if (isset($errormsg)) {        # code...
        echo $errormsg;
                     }
   

    if (isset($gethisquestion)) {
        # code...
        ?>
        <table border="2">
            <tr>
                <td colspan="8">@<h1><?=$user_pseudo;?></h1></td>
            </tr>
            <tr>
                <td colspan="8"><?=$user_lastname .'  '.$user_firstname;?></td>
            </tr>
        </table><br><br>
        <?php
        while ($question = $gethisquestion->fetch()) {
            # code...
            ?>
              <table border="2">
                <tr>
                    <td colspan="8"><h1><?=$question['titre'];?></h1></td>
                </tr>
                <tr>
                    <td colspan="8"><h2><?=$question['description'];?></h1></td>
                </tr>
                <tr>
                    <td colspan="8"><h3><?=$question['pseudo_auteur'];?></h1></td>
                </tr>
                <tr>
                    <td colspan="8">Par :<?=$question['pseudo_auteur']?> le <?= $question['date_publication'];?></td>
                </tr>
            </table>
          

            <?php
        }
    }
    ?>
</body>
</html>