<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: formlogin.php");
    } else {
        header("Location: formbukutamu.php");
    }
?>
