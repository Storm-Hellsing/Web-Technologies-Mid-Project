<?php

    session_start();
    session_destroy();
    setcookie('userLogin', $userName, time() - 1, '/');
    setcookie('userID', $userName, time() - 1, '/');
    header('location: LoginPage.php');
?>