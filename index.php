<?php
    session_start();
    // require('actions/users/securityaction.php');
    require('actions/questions/showallquestionaction.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>

<div class="container">
    <form method="GET" action="">
        <br><br><br><br>
        <table border="1" cellspacing="5">
            <tr>
                <td colspan="15"><input type="search" name="search" id=""></td>
                <td colspan="6"><input type="submit" value="Rechercher"></td>
            </tr>
        </table>
    </form>
    <br><br><br>
    <?php
    
    while ($question = $getallquestion->fetch()) {
        # code...
        ?>
            <table border="1">
                <tr>
                    <td colspan="8">
                        <a href="article.php?id=<?=$question['id'];?>"><?= $question['titre'];?></a>
                    </td>
                    <td colspan="8">
                        <?= $question['description'];?>
                    </td>
                    <td colspan="8">
                        Publie par : <a href="profile.php?id= <?=$question['id_auteur'];?>"><?= $question['pseudo_auteur'];?>;</a>  le <?= $question['date_publication'];?>;
                    </td>
                </tr>
            </table><br><br>
        <?php
    }
    ?>
</div>
</body>
</html>