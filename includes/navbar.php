
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="publish-question.php">Publier une question</a>
        <a href="index.php">Les questions</a>
        <a href="my-question.php">Mes questions</a>
        
        <?php
        if (isset($_SESSION['auth'])) {
            # code...
            ?>
            <a href="profile.php?id=<?=$_SESSION['id'];?>">Mon profil</a>
            <a href="actions/users/logoutaction.php">Deconexion</a>
       
       <?php }
        ?>
    </div>
</body>
</html>