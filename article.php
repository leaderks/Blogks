<?php 
session_start();
require('actions/questions/showarticlecontentaction.php');
require('actions/questions/postansweraction.php');
require('actions/questions/showallanswerofquestionaction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php';?>
    <br><br>

    <div>
        <?php

        if (isset($errormsg)) {
            # code...
            echo $errormsg ;
        }

        if ($question_publication_date) {
            # code...
            ?>
            <section>
            <h3><?=$question_title;?></h3>
            <hr>
            <p><?=$question_contenu;?></p>
            <hr>
            <small><?= '<a href="profile.php?id='.$question_id_auteur.'"'.$question_pseudo_auteur .'</a> '.$question_publication_date;?></small>
            <br><br>
        </section>
        <section>
            <form method="POST" action="">
                <table border="1">
                    <tr>
                        <td colspan="8">Reponse</td>
                        <td colspan="8"><textarea name="answer" id="" cols="30" rows="10" placeholder="Message"></textarea></td>
                        </tr>
                        <tr>
                        <td colspan="8" ><input type="submit" name="validate" value="Repondre" align="center"></td>
                        </tr>
                </table>
            </form>
        </section>
        <?php
        while ($answer = $getallanswerofquestion->fetch()) {
            # code...
            ?>
            <table border="1">
                <tr>
                    <!-- <td colspan="8">Pseudo Auteur :</td> -->
                    <td colspan="8"><a href="profile.php?id=<?= $answer['id_auteur'];?>">
                    <?=$answer['pseudo_auteur'];?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <!-- <td colspan="8">Contenu :</td> -->
                    <td colspan="8"><?= $answer['contenu'];?></td>
                    </tr>
                        <!-- <tr>
                        <td colspan="8" ><input type="submit" name="validate" value="Repondre" align="center"></td>
                        </tr> -->
                </table><br><br>
            <?php
        }
        ?>
            <?php
        }
        ?>
    </div>
    
</body>
</html>