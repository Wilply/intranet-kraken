<?php
    session_start();
    if (!$_SESSION['login']) {
        header('Location: /login.php');
        exit();
    }

    $login_session = strtolower($_SESSION['login']);
    require($_SERVER["DOCUMENT_ROOT"].'/database/connection.php');
    $query = $bdd->prepare("SELECT * FROM users WHERE user_login = :login");
    $query->bindParam(':login', $login_session);
    $query->execute();
    $user_session = $query->fetch();

    if ($user_session['user_is_valid'] == 0) {
        $_SESSION = array();
        session_destroy();
        header('Location: /login.php');
        exit();
    }
    if ($user_session['user_is_admin'] == 0) {
        header('Location: /');
        exit();
    }
?>