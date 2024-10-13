<?php
    // login default username dan passwordnya. \\
    $usernamelogin = 'aldo';
    $passwordlogin = 'passwordlogin';

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: formbukutamu.php");
    } else {
        header("Location: formlogin.php");
    }
?>
