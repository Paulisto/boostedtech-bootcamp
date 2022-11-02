<?php
    session_start();
    if(session_destroy()){
        // redirects to home page
        header("Location: login_form.php");
    };
?>
