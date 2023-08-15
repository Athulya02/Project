<?php
    session_start();

    session_destroy();
    header('Location:/RMSupdate/index.php');
?>