<?php  require 'actions/users/signupaction.php';?>
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
                <td>Pseudo</td>
                <td><input type="text" name="pseudo" id=""></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="lastname" id=""></td>
            </tr>
            <tr>
                <td>prenom</td>
                <td><input type="text" name="firstname" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr  align="center">
                <!-- <p>Envoyer</p> -->
                <td colspan="2"><input type="submit"name="validate" value="S'inscrire" ></td>
            </tr>
            <tr >
                <!-- <p>Envoyer</p> -->
                <td colspan="2"><a href="login.php">J'ai deja un compte ,je me connecte</td>
            </tr>
        </table>
    </form>
</body>
</html>