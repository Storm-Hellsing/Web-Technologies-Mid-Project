<?php

    session_start();
    session_destroy();
    setcookie('userLogin', 'true', time() - 1, '/');
    header('location: LoginPage.php');
?>