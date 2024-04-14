<?php 
try {
    //code...
    // session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=forum;
charset=utf8;','root','');
} catch (Exception $e) {
    //throw $th;
    die('Une erreur a ete trouvee : '.$e->getMessage());
}
?>