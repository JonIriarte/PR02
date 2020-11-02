<?php
    session_start();
    session_destroy();
    header('Location: ../login.php');//redirigimos al login
?>