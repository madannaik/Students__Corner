<?php

    session_start();

//    removing the session data variable email
    unset($_SESSION['email']);

//    destroying the session
    session_destroy();

//    redirecting back to landing page
    header('location: ../index.html');

?>