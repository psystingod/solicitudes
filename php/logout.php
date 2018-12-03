<?php
    // Destruyendo la sesión al hacer logout
    session_start();
    session_destroy();
    header('Location: ../login.php');
?>
