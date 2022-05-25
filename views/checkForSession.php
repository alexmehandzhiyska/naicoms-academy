<?php
    session_start();
    
    if (isset($_SESSION['logged_in']) === false) {
        header('Location: index.php');
        exit();
    }
?>