<?php require('actions/users/loginaction.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<form method="post">
        <?php
        if (isset($errorMSG)) {
            # code...
            echo '<p>'.$errorMSG.'</p>';
        }
        ?>
        <table border="2">
            <tr>
                <td>Pseudo :</td>
                <td><input type="text" name="pseudo" id=""></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <!-- <p>Envoyer</p> -->
                <td colspan="2" align = "center"><input type="submit"name="validate" value="Se connecter"></td>
            </tr>
            <tr >
                <!-- <p>Envoyer</p> -->
                <td colspan="2"><a href="signup.php">J'ai pas de compte ,je m'inscris</a></td>
            </tr>
        </table>
    </form>
</body>
</html>