<?php   
    session_start();

    if(isset($_SESSION['users']['loggedin'])) {
        if($_SESSION['users']['loggedin'] === true) {
            //het is ok
        } else {
            //niet ok
            header("Location: index.php");
            die;
        }
    } else {
        //het is niet ok
        header("Location: index.php");
        die;
    }


    ?>

    Goed, ik ben ingelogd