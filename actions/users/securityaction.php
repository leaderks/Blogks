<?php
session_start();
if (! isset($_SESSION['auth'])) {
    # code...
    header('Location: login.php');
}
?>