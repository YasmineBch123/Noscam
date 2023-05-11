<?php
    session_start();
    $_SESSION['users']['loggedin'] = false;
    session_destroy();
    header("Location:index.php");
?>