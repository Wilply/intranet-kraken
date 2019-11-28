<?php
    function get_user($login) {
        $login = strtolower($login);
        require('connection.php');
        $query = $bdd->prepare("SELECT * FROM users WHERE user_login = :login");
        $query->bindParam(':login', $login);
        $query->execute();
        $ans = $query->fetch();
        return $ans;
    }

    function list_user() {
        require($_SERVER["DOCUMENT_ROOT"]."/processing/admin_session.php");
        require('connection.php');
        $query = $bdd->prepare("SELECT user_nom, user_prenom, user_pole, user_login, user_is_valid, user_is_admin FROM users");
        $query->execute();
        $ans = $query->fetchAll();
        return $ans;
    }

    function update_is_valid($login) {
        $login = strtolower($login);
        require($_SERVER["DOCUMENT_ROOT"]."/processing/admin_session.php");
        require('connection.php');
        $query = $bdd->prepare("UPDATE users SET user_is_valid = NOT user_is_valid WHERE user_login = :login");
        $query->bindParam(':login', $login);
        $ans = $query->execute();
        return $ans;
    }

    function update_is_admin($login) {
        $login = strtolower($login);
        require($_SERVER["DOCUMENT_ROOT"]."/processing/admin_session.php");
        require('connection.php');
        $query = $bdd->prepare("UPDATE users SET user_is_admin = NOT user_is_admin WHERE user_login = :login");
        $query->bindParam(':login', $login);
        $ans = $query->execute();
        return $ans;
    }

    function update_password($login, $password) {
        $login = strtolower($login);
        require('connection.php');
        $query = $bdd->prepare("UPDATE users SET user_password = :password WHERE user_login = :login");
        $query->bindParam(':login', $login);
        $query->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
        $ans = $query->execute();
        return $ans;
    }
?>