<?php  
    session_start();

    if (isset($_SESSION['id'])) {

        if ($_SESSION['role'] == "admin") {
            header("location: admin/");
        } else if ($_SESSION['role'] == "user") {
            header("location: user/");
        } else {
            session_destroy();
        }
        
    }
?>