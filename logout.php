<?php
    echo "data berhasil diinputkan";
    session_start();
    session_unset();
    session_destroy();
    header("location: formlogin.php")
?>