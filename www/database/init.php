<?php
    require('connection.php');
    try {
        $bdd->exec("CREATE DATABASE IF NOT EXISTS ".$bdd_name);
        $bdd->exec("USE ".$bdd_name);
        $bdd->exec("CREATE TABLE IF NOT EXISTS users(
            user_nom VARCHAR(50) NOT NULL,
            user_prenom VARCHAR(50) NOT NULL,
            user_pole VARCHAR(30) NOT NULL,
            user_login VARCHAR(50) NOT NULL,
            user_password VARCHAR(100) NOT NULL,
            user_is_valid BOOLEAN NOT NULL DEFAULT 0,
            user_is_admin BOOLEAN NOT NULL DEFAULT 0,
            CONSTRAINT users_key PRIMARY KEY(user_login)
        )");
        $bdd->exec('INSERT INTO users(user_nom, user_prenom, user_pole, user_login, user_password, user_is_valid, user_is_admin) 
        VALUES ("admin", "admin", "numerique", "services@kraken2020.net", "$2y$10$ug5/jmCk8THLohUWRqMWhuqJMBqwoYoX30DCv.PZkADB9tmGMDUP2", 1, 1)');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>